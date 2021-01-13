<!-- xử lý xóa dữ liệu -->
<?php
include '../model/model.php';
$model = new Model();
$TENTK = $_REQUEST['tentk'];
$MATKHAU = $_REQUEST['matkhau'];
$check = $model->kiem_tra_dang_nhap($TENTK, $MATKHAU);
if (!$check) {
    echo "<script>window.location.href = '../trang-dang-nhap.php';</script>";
} else {
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    echo "<script>window.location.href = '../index.php';</script>";
}

?>