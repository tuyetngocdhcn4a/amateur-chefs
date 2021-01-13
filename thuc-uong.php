<!-- HEADER -->
<?php
include './header.php';
?>

<?php
include './menu-chinh.php';
?>
<style>
<?php include 'css/style.css';
?>
</style>

<!-- Trang Chu -->
<p>Thuc uong</p>
<section class="thuc-uong-page">
    <div id="thuc-uong">
    </div>
</section>
<div class="row d-flex justify-content-between">

    <div class="col-4 mt-5">
        <form class="d-flex justify-content-between" method="post">
            <input class="form-control" type="search" name="searchKey" placeholder="Tìm kiếm" aria-label="Search">
            <button class="ml-3 btn btn-outline-dark text-uppercase" style="min-width: 100px" type="submit">
                Tìm kiếm
            </button>
        </form>
    </div>
</div>
<div class="row list-thuc-uong">
    <div class="col-sm-3">
        <div>
            <label for="thuc-uong-detox" class="text-white cong-thuc-thuc-uong">Detox</label><br>
            <img id="detox" src="img/detox1.jpg" alt="" class="img-list-thuc-uong">
        </div>
    </div>
    <div class="col-sm-3">
        <div>
            <label for="thuc-uong-detox" class="text-white cong-thuc-thuc-uong">Sinh tố</label><br>
        </div>
    </div>
    <div class="col-sm-3">
        <div>
            <label for="thuc-uong-detox" class="text-white cong-thuc-thuc-uong">Cà phê</label><br>
        </div>
    </div>
    <div class="col-sm-3">
        <div>
            <label for="thuc-uong-detox" class="text-white cong-thuc-thuc-uong ">Cocktail</label><br>
        </div>
    </div>

</div>



<!-- FOOTER -->
<?php
include './footer.php';
?>