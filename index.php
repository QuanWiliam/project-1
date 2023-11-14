<?php
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "view/header.php";
include "global.php";

$sphome = load_sp($kyw = "", $id_danhmuc = 0);
$load_dm = load_all_dm();

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'blog':
            include "view/blog.php";
            break;
        case 'categorie':
            include "view/categorie.php";
            break;
        case 'sanpham':
            if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)) {
                $id_danhmuc = $_GET['id_danhmuc'];
                $dssp = load_sp("", $id_danhmuc);
                $tendm = load_ten_dm( $id_danhmuc);
                include "view/sanpham.php";
            } else {
                include "view/home.php";
            }
            break;

        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
?>