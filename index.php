<?php
include "model/pdo.php";
include "model/sanpham.php";
include "view/header.php";
include "global.php";

$sphome = load_sp_home();

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'blog':
            include "view/blog.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
?>