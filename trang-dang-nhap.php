<!-- Page Content -->
<?php
session_start();
include './header.php';
?>
<style>
<?php include 'css/style.css';
?>
</style>

</div>
<section class="login-page">
    <div id="login">
        <div class="container">
            <div id="login-row" class="container row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="./controller/check_login.php" method="post">
                            <h3 class="text-center text-white">ĐĂNG NHẬP</h3>
                            <div class="form-group">
                                <label for="username" class="text-white">Tài khoản:</label><br>
                                <input type="text" name="tentk" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-white">Mật khẩu:</label><br>
                                <input type="password" name="matkhau" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-white"><span>Lưu tài khoản</span> <span><input
                                            id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input id="submit-login" type="submit" name="submit" class="btn btn-white btn-md"
                                    value="Đăng nhập">
                            </div>
                            <?php
                            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                            } else {
                                echo '<span class="text-danger">Đăng nhập để tiếp tục </span>';
                            }

                            ?>
                            <!-- <div id="register-link" class="text-right">
                                <a href="index.php" class="text-white">Tham gia với tư cách người xem</a>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FOOTER -->
<?php
include './footer.php';
?>