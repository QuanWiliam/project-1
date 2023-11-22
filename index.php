<?php
session_start();

include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "view/header.php";
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
        case 'sanpham':
            if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'])) {
                $id_danhmuc = $_GET['id_danhmuc'];
                $dssp = load_sp("", $id_danhmuc);
                $tendm = load_ten_dm($id_danhmuc);
            }
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
            $sphome = load_sp_home();
            $sphomeNew = load_sp_home_new_arr();
            $sphomeHot = load_sp_home_hot();
            include "view/shop.php";
            break;
        case 'chitiet':
            if (isset($_GET['id_sp']) && ($_GET['id_sp']) > 0) {
                $id = $_GET['id_sp'];
                $dmsp = load_all_dm();
                $sphome = load_sp_home();
                $sphomeShop = load_sp_home_shop();
                $loadone = load_one_sanpham($id);
                $sanphamcungloai = load_sanpham_cungloai($id ,$loadone['id_danhmuc'] );

                $sphomeNew = load_sp_home_new_arr();
                $sphomeHot = load_sp_home_hot();
            }
            include "view/chitietsanpham.php";
            break;
        
        case 'dangnhap':
            if (isset($_POST['signin'])) {
                $thongbao = "";
                $username = $_POST['username'];
                $password = $_POST['password'];
                if ($username == "" || $password == "") {
                    $thongbao = "Hãy nhập đầy đủ thông tin!";
                } else {
                    $checkuser = check_taikhoan($username, $password);
                    if (is_array($checkuser)) {
                        $_SESSION['user'] = $checkuser;
                        // đây là câu lệnh để 
                        $_SESSION['return_to'] = $_SERVER['REQUEST_URI'];
                        if (isset($_SESSION['return_to']) && !empty($_SESSION['return_to'])) {
                            $return_to = $_SESSION['return_to'];
                            unset($_SESSION['return_to']); // Xóa thông tin trang trước đó để tránh chuyển hướng lặp lại
                            header('Location: ' . $return_to);
                            exit;
                        }
                        header('Location: index.php');
                        exit();
                    } else {
                        $thongbao = "Bạn nhập sai thông tin";
                    }
                }
            }
        include 'view/dangnhap.php';
        break;

        case 'dangki':
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

        case "dangxuat" :
                // Xóa toàn bộ dữ liệu trong session
                session_unset();
                // Hủy phiên làm việc
                session_destroy();
                header("Location:index.php");
                exit();
            break;

        case 'giohang':
            include "view/giohang.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
?>