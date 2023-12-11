<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng Nhập</title>


    <link rel="stylesheet" href="signin_up/fonts/material-icon/css/material-design-iconic-font.min.css">


    <link rel="stylesheet" href="signin_up/css/style2.css">
</head>

<body>

    <div class="main">


        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">

                        <figure><img src="signin_up/images/pexels-uncoveredlens-eze-joshua-3620411-removebg-preview.png"
                                alt="sing up image"></figure>

                        <a href="index.php?act=dangki" class="signup-image-link">Bạn chưa có tài khoản? Đăng ký ngay</a>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">Đăng nhập</h2>
                        <form action="index.php?act=dangnhap" method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="your_name" placeholder="Your Name" />
                                <p style="color: red;">
                                    <?= $thongbao ?>
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password" />
                                <p style="color: red;">
                                    <?= $thongbao ?>
                                </p>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span> Ghi nhớ tài
                                    khoản!</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Đăng Nhập" />
                            </div>
                        </form>
                        <div class="social-login">
                            <ul class="socials">
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>