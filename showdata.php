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
            <div class="show">
                <a class="item py-2 d-flex">
                    <div class="col-5">
                        <div class="show-ten"><span
                                class="text-uppercase font-weight-bold row"><?php echo $row['tenmon']; ?></span>
                        </div>
                        <div class="show-img"> <img class="contain col-12"
                                <?php echo 'src="data:image/jpeg;base64,' . base64_encode($row['hinhanh']) . '"'; ?> />
                        </div>


                    </div>

                    <div class="col-7 show-congthuc">
                        <div class="noi-dung-cong-thuc cong-thuc-long">
                            <?php echo $row['congthuc']; ?></div>
                    </div>
                </a>
            </div>


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
        <?php
        include './sidebar.php';
        ?>
    </div>

</section>>