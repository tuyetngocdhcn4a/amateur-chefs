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
<section class="container">
    <div class="row">
        <!-- CONTENT -->
        <div class="content col-8">
            <?php

            include 'model/model.php';
            $model = new Model();
            $mamon = $_GET['mamon'];
            $table = $model->show_detail($mamon);


            if (!empty($table)) {
                foreach ($table as $row) {
            ?>

            <!-- ITEM -->
            <a class="item py-2">
                <div class="row">
                    <span class="text-uppercase font-weight-bold row"><?php echo $row['tenmon']; ?></span>

                    <img class="contain col-3" width="250px"
                        <?php echo 'src="data:image/jpeg;base64,' . base64_encode($row['hinhanh']) . '"'; ?> />

                </div>

                <div class="col-8">
                    <div class="noi-dung-cong-thuc">
                        <?php echo $row['congthuc']; ?></div>
                </div>
            </a>

            <?php
                }
            } else {
                echo '<div class="flex justify-center text-center py-5">
                <span class="ten-mon text-uppercase font-weight-bold">KẾT NỐI LỖI VUI LÒNG THỬ LẠI</span>
        </div>';
            }
            ?>

        </div>

        <!-- SIDE BAR -->
        <div class="col-4 pl-3">
            <div class="side-bar pl-3">
                <p>Bài viết mới nhất</p>
                <p>Bài viết đã xem</p>
            </div>
        </div>
    </div>

</section>>