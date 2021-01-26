<!-- HEADER -->
<?php
include './header.php';
include './menu-chinh.php';
// add style
echo '<style>';
include 'css/style.css';
echo '</style>';



?>


<!-- BANNER -->
<section class="mon-trung-page mb-5">
    <div id="mon-au">
        <marquee class="slogan-meo-vat text-uppercase  ">
            Talent creates luxury
        </marquee>
    </div>
</section>

<!-- LIST MON -->

<section class="container">
    <div class="row">
        <!-- CONTENT -->
        <div class="content col-8">
            <?php

            include 'model/model.php';
            $model = new Model();
            $step = 1;

            $table = $model->select_category_with_paging('MONTRUN', $step);

            if (array_key_exists('view-more', $_POST)) {
                $table = $model->select_category_with_paging('MONTRUN', $step + 1);
            }

            if (!empty($table)) {
                foreach ($table as $row) {
            ?>

            <!-- ITEM -->
            <a class="item py-2 row" href=<?php echo 'showdata.php?mamon=' . $row['mamon'] . '' ?>>
                <img class="contain col-3" width="250px"
                    <?php echo 'src="data:image/jpeg;base64,' . base64_encode($row['hinhanh']) . '"'; ?> />
                <div class="col-8">
                    <span class="text-uppercase font-weight-bold row"><?php echo $row['tenmon']; ?></span>
                    <span class="cong-thuc-short row"><?php echo $row['congthuc']; ?></span>
                </div>
            </a>

            <?php
                }
            } else {
                echo '<div class="flex justify-center text-center py-5">
                <span class="ten-mon text-uppercase font-weight-bold">TẠM THỜI CHƯA CÓ BÀI VIẾT</span>
        </div>';
            }
            ?>


            <div class="flex justify-center text-center pb-5">

                <form method="post">
                    <input type="submit" name="view-more" class="btn btn-primary" value="Xem thêm" />
                </form>
            </div>

        </div>

        <!-- SIDE BAR -->
        <?php
        include './sidebar.php';
        ?>
    </div>

</section>>
<!-- FOOTER -->
<?php
include './footer.php';
?>