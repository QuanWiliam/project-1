<?php
//    lấy s
   include '../signin_up/index.php';
   $tho = "";
        if(isset($_GET['id_sp'])){
            echo $_GET['id_sp'];
        } else {
           $tho =  'không có gì';
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
    if(isset($_SESSION['user']) && (count($_SESSION['user'])) >0){

    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get"> <!-- Thay đổi method thành "get" -->
        <input type="hidden" name="id_sp">
        <div class="form-group shadow-textarea">
            <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Write something here..." name="comment"></textarea>
        </div>
        <button type="submit" name="guibinhluan">Gửi bình luận</button>
    </form>
    <?php
    }else{
        $_SESSION['trang'] = "spct";
        $_SESSION['idpro'] = $_GET['id_sp'];

        echo '<a href="../signin_up/index.php?act=dangnhap" target="_parent">Bạn phải đăng nhập mới có thể bình luận</a>';
    }
    ?>

    <h2><?= $tho ?></h2>
</body>
</html>
