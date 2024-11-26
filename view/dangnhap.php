<?php
include '../model/pdo.php';
include '../model/taikhoan.php';
include '../model/validate.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="./css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="./css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="./css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="./css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
</head>
<body>
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="#">Đăng nhập</a>
                <a href="#">FAQs</a>
            </div>
            <div class="offcanvas__top__hover">
                <span>Đồng <i class="arrow_carrot-down"></i></span>
                <ul>
                    <li>USD</li>
                    <li>EUR</li>
                    <li>USD</li>
                </ul>
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
            <a href="#"><img src="img/icon/heart.png" alt=""></a>
            <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
            <div class="price">$0.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Free shipping, 30-day return or refund guarantee.</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Miễn phí vận chuyển, đảm bảo hoàn trả hoặc hoàn tiền trong 30 ngày.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img2/logowweb.webp" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="/index.php">Trang chủ</a></li>
                            <li class="active"><a href="./shop.php">Cửa hàng</a></li>
                            <li><a href="#">Trang</a>
                                <ul class="dropdown">
                                    <li><a href="./about.php">giới thiệu</a></li>
                                    <li><a href="./shop-details.php">Chi tiết cửa hàng</a></li>
                                    <li><a href="./shopping-cart.php">Giỏ hàng</a></li>
                                    <li><a href="./checkout.php">Kiểm tra</a></li>
                                </ul>
                            </li>
                            <li><a href="./contact.php">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div style="display: flex;">
                    <div class="header__nav__option">
                            <input name="fsrch" id="fsrch" placeholder="Tìm Kiếm ở Đây">
                            <input type="submit" name="" id="" value="tìm kiếm">
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Section: Design Block -->
    <form style="margin-top: 20px; width: 60%; margin-left: 350px;" action="?act=dangnhap" method="post">
        <h2 style="text-align: center; margin-top: 50px;" >Đăng Nhập</h2>
        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4"   >
            <label class="form-label" for="form2Example1">Tên đăng nhập</label>
          <input type="text" id="form2Example1" class="form-control" class="error" name="user"/><?= (isset($error['user'])) ?  $error['user']  : '' ?>
        </div>
      
        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Mật khẩu</label>
          <input type="password" id="form2Example2" class="form-control" class="error" name="pass" /><?= (isset($error['pass'])) ?  $error['pass']  : '' ?>
        </div>
      
        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
          <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
              <label class="form-check-label" for="form2Example31"> Lưu mật khẩu </label>
            </div>
          </div>
      
          <div class="col">
            <!-- Simple link -->
            <a href="#!">Quên mật khẩu</a>
          </div>
        </div>
      
        <!-- Submit button -->
        <button name="btn" value="dangnhap" data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Đăng nhập</button>
                        <small style="color: red;"> <?= (isset($err)) ?  $err . '<br>'  : '' ?></small>
        
        <!-- Register buttons -->
        <div class="text-center">
          <p>Chưa có tài khoản<a href="./dangky.php">Đăng ký</a></p></div>
      </form>
        
        <!-- Register buttons -->
        <div class="text-center">
      </form>
  <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="#"><img src="img2/logowweb.webp" alt=""></a>
                    </div>
                    <p>Khách hàng là trung tâm của mô hình kinh doanh độc đáo của chúng tôi, bao gồm cả thiết kế.</p>
                    <a href="#"><img src="img/payment.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <h6>Chăm sóc khách hàng</h6>
                    <ul>
                        <li><a href="#">Hướng dẫn mua hàng</a></li>
                        <li><a href="#">Chính sách đổi trả</a></li>
                        <li><a href="#">Chính sách bảo hành</a></li>
                        <li><a href="#">Dịch vụ và sửa chữa</a></li>
                        <li><a href="#">Hướng dẫn sử dụng đồng hồ</a></li>
                        <li><a href="#">Chính sách Khách hàng thân thiết</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <h6>DONGHODUYANH</h6>
                    <ul>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Triết lý kinh doanh</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <h6>Địa chỉ</h6>
                    <div class="footer__newslatter">
                        <p>Địa chỉ: 205 Trần Hưng Đạo, phường Cô Giang, Quận 1, TP.Hồ Chí Minh (gần Ngân hàng Vietinbank)
                            Điện thoại: 0836.88.99.86
                            Email: duyanhwatch@gmail.com</p>
                        <form action="#">
                            <input type="text" placeholder="Your email">
                            <button type="submit"><span class="icon_mail_alt"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="footer__copyright__text">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <p>Copyright ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>2020
                        All rights reserved | This template is made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    </p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </div>
</footer>
  <!-- Section: Design Block -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.slicknav.js"></script>
  <script src="js/mixitup.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>