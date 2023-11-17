<?php
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
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
                $sphomeNew = load_sp_home_new_arr();
                $sphomeHot = load_sp_home_hot();
            }
            include "view/chitietsanpham.php";

    }
} else {
    include "view/home.php";
}
include "view/footer.php";
?>