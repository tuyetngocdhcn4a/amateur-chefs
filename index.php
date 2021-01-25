<!-- HEADER -->
<?php
include './header.php';
include './menu-chinh.php';
include 'model/model.php';
$model = new Model();
$step = 1;

$table_monbac = $model->select_category_with_paging_tv('MONBAC', $step);
$table_montrung = $model->select_category_with_paging_tv('MONTRUN', $step);
$table_monnam = $model->select_category_with_paging_tv('MONNAM', $step);
$table_monau = $model->select_category_with_paging_tt_monau('MONAU', $step);
$table_mona = $model->select_category_with_paging_tt_monau('MONA', $step);


// add style
echo '<style>';
include 'css/style.css';
echo '</style>';



?>


<!-- BANNER -->
<section class="index-page mx-3 mb-5">
    <div id="trang-chu" class="py-2 px-5 d-flex flex-column justify-content-between h-100">
        <div class="row">
            <div class="col-4 in-tt">
                <h3>Healthy and Nutritious</h3>
                <h1>
                    AMATEUR CHEF
                </h1>
            </div>
            <div class="col-8 in-if">
                <marquee behavior="" direction="">
                    <h1>
                        www.amasteurchef.com
                    </h1>
                </marquee>
            </div>

        </div>
        <div class="row d-flex in-show-btn">
            <div class="search-container">
                <form action="">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit-search"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>

    </div>
</section>

<!-- LIST MON -->

<section class="container d-flex">
    <div class="row">
        <!-- CONTENT -->
        <div class="content col-9">
            <div class="thuan-viet d-flex row">
                <!-- MON BAC -->
                <section class="tv-mon d-flex row">
                    <div class="title-item">
                        <h1><a href="mon-bac.php" class="tv-mon-it">Món Ngon miền bắc</a></h1>
                    </div>
                    <div class=" set-col">
                        <?php
                        if (!empty($table_monbac)) {
                            foreach ($table_monbac as $row) {
                        ?>

                        <!-- ITEM -->
                        <div class="item2">
                            <a class="item py-2" href=<?php echo 'showdata.php?mamon=' . $row['mamon'] . '' ?>>
                                <img class="contain row-3 img-mon" width="250px"
                                    <?php echo 'src="data:image/jpeg;base64,' . base64_encode($row['hinhanh']) . '"'; ?> />
                                <div class="row-3">
                                    <span
                                        class="text-uppercase font-weight-bold row-3"><?php echo $row['tenmon']; ?></span>
                                </div>
                            </a>
                        </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </section>
                <!-- MON TRUNG -->
                <section class="tv-mon d-flex row">
                    <div class="title-item">
                        <h1><a href="mon-trung.php" class="tv-mon-it">Món Ngon miền trung</a></h1>
                    </div>
                    <div class=" set-col">
                        <?php
                        if (!empty($table_montrung)) {
                            foreach ($table_montrung as $row) {
                        ?>

                        <!-- ITEM -->
                        <div class="item2">
                            <a class="item py-2" href=<?php echo 'showdata.php?mamon=' . $row['mamon'] . '' ?>>

                                <img class="contain row-3 img-mon" width="250px" height="150px"
                                    <?php echo 'src="data:image/jpeg;base64,' . base64_encode($row['hinhanh']) . '"'; ?> />
                                <div class="row-3">
                                    <span
                                        class="text-uppercase font-weight-bold row-3"><?php echo $row['tenmon']; ?></span>
                                </div>
                            </a>
                        </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </section>
                <!-- MON NAM -->
                <section class="tv-mon d-flex row">
                    <div class="title-item">
                        <h1><a href="mon-nam.php" class="tv-mon-it">Món Ngon miền nam</a></h1>
                    </div>
                    <div class=" set-col">
                        <?php
                        if (!empty($table_monnam)) {
                            foreach ($table_monnam as $row) {
                        ?>

                        <!-- ITEM -->
                        <div class="item2">
                            <a class="item py-2" href=<?php echo 'showdata.php?mamon=' . $row['mamon'] . '' ?>>
                                <img class="contain row-3 img-mon" width="250px"
                                    <?php echo 'src="data:image/jpeg;base64,' . base64_encode($row['hinhanh']) . '"'; ?> />
                                <div class="row-3">
                                    <span
                                        class="text-uppercase font-weight-bold row-3"><?php echo $row['tenmon']; ?></span>
                                </div>
                            </a>
                        </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </section>
            </div>
        </div>

        <!-- SIDE BAR -->
        <?php
        include './sidebar.php';
        ?>
    </div>

</section>
<!-- MON AU -->
<section class="tv-mon d-flex row">
    <div class="title-item">
        <h1><a href="mon-au.php" class="tv-mon-it">ẨM THỰC CHÂU ÂU</a></h1>
    </div>
    <div class=" set-col">
        <?php
        if (!empty($table_monau)) {
            foreach ($table_monau as $row) {
        ?>
        <!-- ITEM -->
        <div class="item2" id="tc-mon-au">
            <a class="item py-2" href=<?php echo 'showdata.php?mamon=' . $row['mamon'] . '' ?>>
                <div> <img class="contain row-4 img-mon" width="250px" height="160px"
                        <?php echo 'src="data:image/jpeg;base64,' . base64_encode($row['hinhanh']) . '"'; ?> /></div>
                <div class="row-3">
                    <div> <span class="text-uppercase font-weight-bold row-3"><?php echo $row['tenmon']; ?></span>
                    </div>
                    <div class="">
                        <span class="cong-thuc-short"><?php echo $row['congthuc']; ?></span>
                    </div>
                </div>
            </a>
        </div>
        <?php
            }
        }
        ?>
    </div>
</section>

<section class="tv-mon d-flex row">
    <div class="title-item">
        <h1><a href="mon-au.php" class="tv-mon-it">ẨM THỰC CHÂU Á</a></h1>
    </div>
    <div class=" set-col">
        <?php
        if (!empty($table_mona)) {
            foreach ($table_mona as $row) {
        ?>
        <!-- ITEM -->
        <div class="item2" id="tc-mon-au">
            <a class="item py-2" href=<?php echo 'showdata.php?mamon=' . $row['mamon'] . '' ?>>
                <div> <img class="contain row-4 img-mon" width="250px" height="160px"
                        <?php echo 'src="data:image/jpeg;base64,' . base64_encode($row['hinhanh']) . '"'; ?> /></div>
                <div class="row-3">
                    <div> <span class="text-uppercase font-weight-bold row-3"><?php echo $row['tenmon']; ?></span>
                    </div>
                    <div class="">
                        <span class="cong-thuc-short"><?php echo $row['congthuc']; ?></span>
                    </div>
                </div>
            </a>
        </div>
        <?php
            }
        }
        ?>
    </div>
</section>
<!-- ABOUT US -->
<section id="about" class="row">
    <div class="col-sm-6 d-flex d-flex flex-row ab">

    </div>
    <div class="col-sm-6 d-flex flex-column justify-content-around pl-5">
        <h1>VỀ CHÚNG TÔI</h1>
        <p class="pr-5 w-100">Bạn đã bao giờ nghĩ mình sẽ sống trong một không gian nghệ thuật? ngôi nhà hay căn phòng
            của bạn là một gian phòng triển lãm, là một gallery thu nhỏ và chính đồ vật trong nhà bạn là những tác phẩm
            nghệ thuật ?</p>
        <p class="pr-5 w-100"><b>Amasteur Chef </b>chúng tôi chuyên sản xuất gia công đồ gỗ nội thất, đóng đồ gỗ nội
            thất cho căn hộ chung cư, nhà phố, văn phòng ở Toàn quốc. Kinh nghiệm thi công nhiều công trình nội thất,
            chúng tôi tin rằng sẽ mang đến sản phẩm dịch
            vụ tốt nhất đến với khách hàng và đối tác!</p>
        <div>
            <h4>ĐỘI NGŨ QUẢN TRỊ:</h4>
            <p>1. Lê Hiền Hiền</p>
            <p>2. Huỳnh Thị Tuyết Ngọc</p>
        </div>
    </div>

</section>
<!-- FOOTER -->
<?php
include './footer.php';
?>