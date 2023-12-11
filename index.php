<?php
ob_start();
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "model/donhang.php";
include "model/giohang.php";


// để tránh include "view/header.php"; vào trang đăng nhập và đăng kí
if (isset($_GET['act']) && $_GET['act'] != "dangnhap" && $_GET['act'] != "dangki") {
    include "view/header.php";
} elseif (!isset($_GET['act'])) {
    include "view/header.php";
}

include "global.php";

$sphome = load_sp_home();
$sphomeNew = load_sp_home_new_arr();
$sphomeHot = load_sp_home_hot();


if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];

    switch ($act) {
        case 'blog':
            include "view/blog.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
        // đây là phần tìm kiếm
        case "timkiemsp":
            $kyw = '';
            if (isset($_POST['timkiem']) && ($_POST['timkiem'])) {
                if ($_POST['kyw'] == "") {
                    $kyw = '';
                    //  sử dụng hàm header() để thực hiện chuyển hướng, nhưng đặt Location trực tiếp trong thẻ meta của HTML để tránh lỗi headers already sent
                    echo '<meta http-equiv="refresh" content="0;url=index.php?act=shop">';
                } else {
                    $kyw = $_POST['kyw'];
                }
            }

            $listsp = load_sp_timkiem($kyw);
            // Đặt $listdm làm biến để truy vấn đến hàm load danh muc
            // $limit = 9;
            // if (isset($_POST['number'])) {
            //     $number = $_POST['number'];
            //     $start = ($number - 1) * $limit;
            // } else {
            //     $start = 0;
            // }
            // $sphomeShop = load_limit_9_pro($start, $limit);
            // $count = count_pro();
            $dmsp = load_all_dm();
            include "view/timkiem.php";
            break;

        // đây là phần tìm kiếm theo phần sidebar
        case 'sanpham':
            if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'])) {
                $id_danhmuc = $_GET['id_danhmuc'];
                $dssp = load_sp("", $id_danhmuc);
                $tendm = load_ten_dm($id_danhmuc);

            }
            $limit = 9;
            if (isset($_POST['number'])) {
                $number = $_POST['number'];
                $start = ($number - 1) * $limit;
            } else {
                $start = 0;
            }
            $sphomeShop = load_limit_9_pro($start, $limit);
            $count = count_pro();
            $dmsp = load_all_dm();
            include "view/sanpham.php";
            break;
        case 'shop':
            $limit = 9;
            if (isset($_POST['number'])) {
                $number = $_POST['number'];
                $start = ($number - 1) * $limit;
            } else {
                $start = 0;
            }
            $sphomeShop = load_limit_9_pro($start, $limit);
            $count = count_pro();
            $dmsp = load_all_dm();
            $sphome = load_sp_home_shop();
            include "view/shop.php";
            break;

        case 'chitietsanpham':

            if (isset($_GET['id_sp']) && ($_GET['id_sp']) > 0) {
                $id = $_GET['id_sp'];
                $sphome = load_sp_home();
                $loadone = load_one_sanpham($id);
                $sanphamcungloai = load_sanpham_cungloai($id, $loadone['id_danhmuc']);
            }
            include "view/chitietsanpham.php";
            break;

        case 'dangnhap':

            $thongbao = "";
            if (isset($_POST['signin'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                if ($username == "" || $password == "") {
                    $thongbao = "Hãy nhập đầy đủ thông tin!";
                } else {
                    // Đảm bảo hàm check_taikhoan() được định nghĩa và trả về dữ liệu một cách chính xác
                    $checkuser = check_taikhoan($username, $password);

                    if (is_array($checkuser)) {
                        $_SESSION['user'] = $checkuser;

                        // Đặt'$previous' chỉ khi không có giá trị trước đó
                        header('Location: index.php');
                    } else {
                        $thongbao = "Bạn nhập sai thông tin";
                    }
                }
            }

            include 'view/dangnhap.php';

            break;


        case 'dangki':

            $thongbao = "";
            if (isset($_POST['signup'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $re_password = $_POST['re_password'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                if ($username == "" || $password == "" || $re_password == "" || $address == '' || $tel == '') {
                    $thongbao = "Hãy nhập đầy đủ thông tin!";
                } else {
                    $adduser = insert_taikhoan($username, $password, $email, $address, $tel);
                    if (isset($adduser)) {
                        $_SESSION['user'] = $adduser;

                        header('Location: index.php');

                        exit();
                    }
                }
            }
            include 'view/dangki.php';

            break;


        case "dangxuat":
            // Xóa toàn bộ dữ liệu trong session
            session_unset();
            // Hủy phiên làm việc
            session_destroy();
            echo '<meta http-equiv="refresh" content="0;url=index.php">';
            exit();

        case "addtocart":
            if (isset($_GET['id']) && $_GET['id']) {
                $amount = isset($_GET['amount']) ? $_GET['amount'] : 1;
                $id = $_GET['id'];
                $sp = load_one_sanpham($id);
                extract($sp);
                $tk = load_giohang_tk($_SESSION['user']['id_tk']);
                extract($tk);
                if (empty(ton_tai($id_sp, $id_giohang))) {
                    addtocart($id_giohang, $id_sp, $price_sp, $amount);
                }
            }
            if (isset($_GET['idcart']) && $_GET['amount']) {
                updateSL($_GET['idcart'], $_GET['amount']);
            }
            // Lấy hết sp trong giỏ hàng
            $id_tk = $_SESSION['user']['id_tk'];
            $carts = load_cart_tk($id_tk);
            include "view/cart.php";
            break;
        case 'listcart':
            if (!isset($_SESSION['user']) || !is_array($_SESSION['user'])) {
                echo '
                    <div class=" container h-75">
                      <h1>Hãy đăng nhập để sử dụng dịch vụ của chúng tôi</h1>
                    </div>
                    ';
            } else {
                if (isset($_GET['id']) && $_GET['id']) {
                    $amount = isset($_GET['amount']) ? $_GET['amount'] : 1;
                    $id = $_GET['id'];
                    $sp = load_one_sanpham($id);
                    extract($sp);
                    $tk = load_giohang_tk($_SESSION['user']['id_tk']);
                    extract($tk);
                    if (empty(ton_tai($id_sp, $id_giohang))) {
                        addtocart($id_giohang, $id_sp, $price_sp, $amount);
                    }
                }
                if (isset($_GET['idcart']) && $_GET['idcart'] && $_GET['amount']) {
                    updateSL($_GET['idcart'], $_GET['amount']);
                }
                // Lấy hết sp trong giỏ hàng
                $id_tk = $_SESSION['user']['id_tk'];
                $carts = load_cart_tk($id_tk);
                include "view/cart.php";
            }
            break;
        // case 'listcart':
        //     if (!isset($_SESSION['user']) || !is_array($_SESSION['user'])) {
        //         echo '
        //             <div class=" container h-75">
        //               <h1>Hãy đăng nhập để sử dụng dịch vụ của chúng tôi</h1>
        //             </div>
        //             ';
        //     } else {
        //         $tk = load_giohang_tk($_SESSION['user']['id_tk']);
        //         extract($tk);
        //         $carts = load_cart_tk($id_tk);
        //         include "view/cart.php";
        //     }
        //     break;

        case 'delcart':
            if (isset($_GET['idcart'])) {
                $id = $_GET['idcart'];
                $tk = load_giohang_tk($_SESSION['user']['id_tk']);
                extract($tk);
                delete_giohang($id);
            }
            $carts = load_cart_tk($id_tk);
            include "view/cart.php";

            break;

        case 'checkout':
            $tk = load_giohang_tk($_SESSION['user']['id_tk']);
            extract($tk);
            $hoadon = load_hoadon($id_giohang);
            include "view/checkout.php";
            break;
        case 'thanhtoan':
            if (isset($_POST['btn-payment'])) {
                $total = $_POST['total'];
                $date = date('Y/m/d');
                $idBill = themDonHang($total, $date);
                $tk = load_giohang_tk($_SESSION['user']['id_tk']);
                extract($tk);
                $listId = loadAllGioHang($id_giohang);
                foreach ($listId as $sp) {
                    themChitietHD($idBill, $sp['id_sp'], $sp['amount']);
                }
                deleteAll($id_giohang);
            }
            include "view/thanhtoan.php";
            break;

        case 'xemdonhang':
            if (!isset($_SESSION['user']) || !is_array($_SESSION['user'])) {
                echo '
                    <div class=" container h-75">
                      <h1>Hãy đăng nhập để sử dụng dịch vụ của chúng tôi</h1>
                    </div>
                    ';
            } else {

                include "view/xemdonhang.php";
            }
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
ob_end_flush();
if (isset($_GET['act']) && $_GET['act'] != "dangnhap" && $_GET['act'] != "dangki") {
    include "view/footer.php";
} elseif (!isset($_GET['act'])) {
    include "view/footer.php";
}


?>