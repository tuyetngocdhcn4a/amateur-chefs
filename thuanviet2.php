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

// add style
echo '<style>';
include 'css/style.css';
echo '</style>';



?>


<!-- BANNER -->
<section class="mon-tv-page mb-5  d-flex">
    <div id="mon-tv">
        <marquee class="slogan-mon-tv text-uppercase  ">
            Talent creates luxury
        </marquee>
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
<!-- FOOTER -->
<?php
include './footer.php';
?>