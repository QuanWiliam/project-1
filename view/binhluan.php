<?php
session_start();
include "../model/pdo.php";
include '../model/binhluan.php';
$tho = "";
if (isset($_GET['id_sp'])) {
    $idpro = $_GET['id_sp'];
}

if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
    $noidung = $_POST['noidung'];
    $ngaybinhluan = date('Y/m/d');
    $id_tk = $_SESSION['user']['id_tk'];
    $name_tk = $_SESSION['user']['name_tk'];
    $id_sp = $_POST['id_sp'];
    insert_binhluan($noidung, $id_tk, $id_sp, $ngaybinhluan, $name_tk);
}

$bl = binhluan_all();
$html_bl = "";
foreach ($bl as $val) {
    extract($val);
    $html_bl .= '
            <h3>' . $noidung . '</h3><br>
            <p>' . $name_tk . ' - ' . $ngaybinhluan . '</p>
            ';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1>bìnhluan</h1>
    <?php
    if (isset($_SESSION['user']) && (count($_SESSION['user'])) > 0) {

    ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"> <!-- Thay đổi method thành "get" -->
            <input type="hidden" name="id_sp" value="<?= $id_sp ?>">
            <div class="form-group shadow-textarea">
                <textarea class="form-control z-depth-1" name="noidung"  rows="3" placeholder="Write something here..."></textarea>
            </div>
            <button type="submit" name="guibinhluan">Gửi bình luận</button>
        </form>
    <?php
    } else {

        echo '<a href="../index.php?act=dangnhap" target="_parent">Bạn phải đăng nhập mới có thể bình luận</a>';
    }
    ?>
    <div class="bl">
        <?= $html_bl ?>
    </div>

    <h2><?= $tho ?></h2>
</body>

</html>