<?php
// include("../model/pdo.php");
// include("../model/taikhoan.php");

if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangnhap':
            if (isset($_POST['signin'])) {
                $thongbao = "";
                $username = $_POST['username'];
                $password = $_POST['password'];
                echo '<script>alert("asdasd")</script>';
                echo $password;
                if ($username == "" || $password == "") {
                    $thongbao = "Hãy nhập đầy đủ thông tin!";
                } else {
                    $checkuser = check_taikhoan($username, $password);
                    var_dump($checkuser);
                    if (is_array($checkuser)) {
                        $_SESSION['user'] = $checkuser;
                        // đây là câu lệnh để 
                        $_SESSION['return_to'] = $_SERVER['REQUEST_URI'];
                        if (isset($_SESSION['return_to'])) {
                            $return_to = $_SESSION['return_to'];
                            unset($_SESSION['return_  to']); // Xóa thông tin trang trước đó để tránh chuyển hướng lặp lại
                            header('Location: ' . $return_to);
                            exit;
                        }
                        header('Location: ../index.php');
                        exit();
                    } else {
                        $thongbao = "Bạn nhập sai thông tin";
                    }
                }
            }
            include '../signin_up/dangnhap.php';
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
                        header('Location: ../index.php');
                        exit();
                    }
                }
            }
            include '../signin_up/dangki.php';
            break;

        default:
            // Xử lý khi không có hành động nào phù hợp
            break;
    }
}

// Xử lý đăng xuất tài khoản
if (isset($_GET['logout'])) {
    // Xóa toàn bộ dữ liệu trong session
    session_unset();
    // Hủy phiên làm việc
    session_destroy();
    header("Location: ../../project-1/signin_up/dangnhap.php");
    exit();
}
?>