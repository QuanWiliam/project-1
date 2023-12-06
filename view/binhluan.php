<?php
session_start();
include '../model/pdo.php';
include '../model/binhluan.php';


if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
    $noidung = $_POST['noidung'];
    $ngaybinhluan = date('Y/m/d');
    $id_tk = $_SESSION['user']['id_tk'];
    $name_tk = $_SESSION['user']['name_tk'];
    $id_sp = $_POST['id_sp'];
    insert_binhluan($noidung, $id_tk, $id_sp, $ngaybinhluan, $name_tk);
}
$idpro = $_REQUEST['id_sp'];
$bl = binhluan_all_id($idpro);
$html_bl = "";
foreach ($bl as $val) {
    extract($val);
    $html_bl .= '
    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-8">
                <div class="d-flex flex-column comment-section">
                    <div class="bg-white p-2">
                        <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">' . $name_tk . '</span><span class="date text-black-50">Chia sẻ công khai - ' . $ngaybinhluan . '</span></div>
                        </div>
                        <div class="mt-2">
                            <p class="comment-text">' . $noidung . '</p>
                        </div>
                    </div><hr>
                    
                    
                </div>
            </div>
        </div>
    </div> 
            ';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_SESSION['user']) && (count($_SESSION['user'])) > 0) {

        ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="hidden" name="id_sp" value="<?= $id_sp ?>">
            <div class="bg-light ">
                <div class="d-flex flex-row align-items-start">
                    <textarea name="noidung" class="form-control ml-1 shadow-none textarea"></textarea>
                </div>
                <div class="mt-2 text-right">
                    <input class="btn btn-primary btn-sm shadow-none" type="submit" name="guibinhluan" value="Bình luận">
                </div>
            </div>
        </form>
        <?php
    } else {

        echo '<a href="../index.php?act=dangnhap" target="_parent">Bạn phải đăng nhập mới có thể bình luận</a>';
    }
    ?>
    <div class="bl">
        <?= $html_bl ?>
    </div>

</body>

</html>