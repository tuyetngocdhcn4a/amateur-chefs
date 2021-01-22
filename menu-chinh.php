 <!-- ======= Header ======= -->
 <header id="header" class="d-flex align-items-center">
     <div class="container">

         <!-- The main logo is shown in mobile version only. The centered nav-logo in nav menu is displayed in desktop view  -->
         <div class="logo d-block d-lg-none">
             <a href="index.php"><img src="assets/img/logo-123.png" alt="" class="img-fluid"></a>
         </div>

         <nav class="nav-menu d-none d-lg-block">
             <ul class="nav-inner">
                 <li class="active"><a href="index.php">Trang chủ</a></li>
                 <li class="drop-down"><a href="">Món ăn</a>
                     <ul>
                         <li><a href="mon-au.php">Món âu</a></li>
                         <li><a href="mon-a.php">Món á</a></li>
                         <li class="drop-down"><a href="thuan-viet.php"> Thuần việt</a>
                             <ul>
                                 <li><a href="mon-bac.php">Món Bắc</a></li>
                                 <li><a href="mon-trung.php">Món Trung</a></li>
                                 <li><a href="mon-nam.php">Món Nam</a></li>
                             </ul>
                         </li>
                         <li><a href="an-vat.php">Ăn vặt</a></li>
                     </ul>
                 </li>
                 <li><a href="thuc-uong.php">Thức uống</a></li>

                 <li class="nav-logo"><a href="index.php"><img class="img-logo" src="assets/img/logo-123.png" alt=""
                             width="100" height="100
                             class=" img-fluid"></a>
                 </li>

                 <li><a href="meo-vat.php">Mẹo vặt</a></li>
                 <li><a href="lien-he.php">Liên hệ</a></li>
                 <?php
                    session_start();
                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                        echo '<li><a href="trang-dang-nhap.php">QUẢN LÝ</a></li>';
                        echo '<li><a href="controller/logout.php">ĐĂNG XUẤT</a></li>';
                    } else {
                        echo '<li><a href="trang-dang-nhap.php">Đăng nhập</a></li>';
                    }

                    ?>

             </ul>
         </nav><!-- .nav-menu -->

     </div>
 </header><!-- End Header -->