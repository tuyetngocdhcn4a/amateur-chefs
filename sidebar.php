<div class="col-4">
    <div class="side-bar pl-3">
        <div class=" m-2">
            <h3>Bài viết nổi bật</h3>
            <!-- CONTENT -->
            <div class="content ">
                <?php

                // include 'model/model.php';
                // $model = new Model();
                $step = 1;

                $table = $model->select_ALL($step);

                if (array_key_exists('view-more', $_POST)) {
                    $table = $model->select_ALL($step + 1);
                }

                if (!empty($table)) {
                    foreach ($table as $row) {
                ?>


                <!-- ITEM -->
                <div class="m-3">

                    <a class="item py-2 row" href=<?php echo 'showdata.php?mamon=' . $row['mamon'] . '' ?>>
                        <img class="contain col-6" width="250px"
                            <?php echo 'src="data:image/jpeg;base64,' . base64_encode($row['hinhanh']) . '"'; ?> />
                        <div class="col-6 row">
                            <span class="text-uppercase font-weight-bold row"><?php echo $row['tenmon']; ?></span>

                        </div>
                    </a>
                </div>


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
        </div>
    </div>