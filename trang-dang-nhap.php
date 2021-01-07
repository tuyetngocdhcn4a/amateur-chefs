<!-- Page Content -->
<?php
include './header.php';
?>
<style>
<?php include 'css/style.css';
?>
</style>

</div>
<section class="login-page">
    <div id="login">
        <h2 class="text-center text-white pt-5"> CHÀO MỪNG BẠN ĐẾN VỚI AMATEUR CHEFS</h2>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-white">ĐĂNG NHẬP</h3>
                            <div class="form-group">
                                <label for="username" class="text-white">Tài khoản:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-white">Mật khẩu:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-white"><span>Lưu tài khoản</span> <span><input
                                            id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input id="submit-login" type="submit" name="submit" class="btn btn-white btn-md"
                                    value="Đăng nhập">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="index.php" class="text-white">Tham gia với tư cách người xem</a>
                            </div>
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