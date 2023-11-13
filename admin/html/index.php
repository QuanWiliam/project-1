<?php
include "/xampp/htdocs/du_an_one/model/pdo.php";
include "/xampp/htdocs/du_an_one/model/danhmuc.php";
include "/xampp/htdocs/du_an_one/model/sanpham.php";
include "../html/header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        // danh mục
        case "adddm":
            // kiểm tra xem nút thêm mới có tồn tại và được ấn hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                // kiểm tra tên loại có trống không
                if ($_POST['tenloai'] == '') {
                    echo '
                    <div class="container mt-3">
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong>Thông tin!</strong> Bạn chưa nhập loại sản phẩm.
                        </div>
                        </div>
                    ';
                } else {
                    $tenloai = $_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    echo '
                    <div class="container mt-3">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong>Thông tin!</strong> Bạn đã thêm thành công.
                        </div>
                        </div>
                    ';
                }
            }
            include "../html/danhmuc/add_danhmuc.php";
            break;

        case "listdm":
            // đặt $listdm làm biến để truy vấn đến hàm load danh muc
            $listdm = load_all_dm();
            include "../html/danhmuc/list_danhmuc.php";
            break;
        case "xoadm":
            if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc']) > 0) {
                $id = $_GET['id_danhmuc'];
                delete_danhmuc($id);
            }
            $listdm = load_all_dm();
            include "../html/danhmuc/list_danhmuc.php";
            break;
        case "suadm":
            if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc']) > 0) {
                $id = $_GET['id_danhmuc'];
                $list_one = load_one_dm($id);
            }
            include "../html/danhmuc/sua_danhmuc.php";
            break;
        case "updatedm":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['iddm'];
                $name = $_POST['tenloai'];
                update_dm($id, $name);
                echo '
                    <div class="container mt-3">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong>Thông tin!</strong> Bạn cập nhật thành công.
                        </div>
                        </div>
                    ';
            }
            include "../html/danhmuc/sua_danhmuc.php";
            break;
        // hết danh mục

        //    sản phẩm
        case "addsp":
            if (isset($_POST['themmoisp']) && ($_POST['themmoisp'])) {
                $name_sp = $_POST['name_sp'];
                $price_sp = $_POST['price_sp'];
                $id_danhmuc = $_POST['id_danhmuc'];
                $mota = $_POST['mota_sp'];

                $img_sp = $_FILES['img_sp']['name'];
                $target_div = "/xampp/htdocs/du_an_one/upload/";
                $target_file = $target_div . basename($_FILES['img_sp']['name']);
                move_uploaded_file($_FILES['img_sp']['tmp_name'], $target_file);
                if ($name_sp == "" || $price_sp == "" || $id_danhmuc == "" || $target_file == "" || $mota == "") {
                    echo '
                <script>
                        function thongbao(){
                         alert("bạn hãy nhập đầy đủ thông tin !");
                        }
                        thongbao();
                        </script>
                ';
                } else {
                    insert_sanpham($name_sp, $img_sp, $price_sp, $mota, $id_danhmuc);
                    echo '
                <div class="container mt-3">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong>Thông tin!</strong> Bạn thêm sản phẩm thành công.
                        </div>
                        </div>
                ';
                }
            }
            $listdm = load_all_dm();
            include "../html/sanpham/add_sanpham.php";
            break;
        // load tất cả sản phẩm trang admin
        case "listsp":
            $kyw = '';
            $id_danhmuc = 0;
            if (isset($_POST['timkiem']) && ($_POST['timkiem'])) {
                if ($_POST['kyw'] == "") {
                    $kyw = '';
                    $id_danhmuc = 0;
                } else {
                    $kyw = $_POST['kyw'];
                    $id_danhmuc = $_POST['id_danhmuc'];
                }
            }

            $listsp = load_sp($kyw, $id_danhmuc);
            // Đặt $listdm làm biến để truy vấn đến hàm load danh muc
            $listdm = load_all_dm();
            include "../html/sanpham/list_sanpham.php";
            break;
        // xóa sản phẩm
        case "xoasp":
            if (isset($_GET['id_sp']) && ($_GET['id_sp']) > 0) {
                $id = $_GET['id_sp'];
                delete_sanpham($id);
            }
            $listsp = load_sp("", 0);
            // Đặt $listdm làm biến để truy vấn đến hàm load danh muc
            $listdm = load_all_dm();
            include "../html/sanpham/list_sanpham.php";
            break;
        case "suasp":
            if (isset($_GET['id_sp']) && ($_GET['id_sp']) > 0) {
                $id = $_GET['id_sp'];
                $onesp = load_one_sanpham($id);
            }
            $listdm = load_all_dm();
            include "../html/sanpham/update_sanpham.php";
            break;
        case "updatesp":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id_sp'];
                $name = $_POST['name_sp'];
                $price = $_POST['price_sp'];
                $mota = $_POST['mota_sp'];
                $id_danhmuc = $_POST['id_danhmuc'];
                $img = $_FILES['img_sp']['name'];
                $target_div = "../../upload/";
                $target_file = $target_div . basename($_FILES['img_sp']['name']);
                move_uploaded_file($_FILES['img_sp']['tmp_name'],$target_file);
                update_sanpham($id, $name, $img, $price, $mota, $id_danhmuc);
            }
            $listdm = load_all_dm();
            $listsp = load_sp("", 0);
            include "../html/sanpham/list_sanpham.php";
            break;
    }

} else {
    include "../html/home.php";
}
include "../html/footer.php";

?>