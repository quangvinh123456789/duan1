<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css">
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
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a href="#">Đăng nhập</a>
                                <a href="#">FAQs</a>
                            </div>
                            <div class="header__top__hover">
                                <span>Đồng<i class="arrow_carrot-down"></i></span>
                                <ul>
                                    <li>Đồng</li>
                                    <li>EUR</li>
                                    <li>Đồng</li>
                                </ul>
                            </div>
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
                            <li><a href="./index.php">Trang chủ</a></li>
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
    <form style="margin-top: 20px; width: 60%; margin-left: 350px;">
        <h2 style="text-align: center; margin-top: 50px;">Đăng Nhập</h2>
        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" id="form2Example1" class="form-control" />
            <label class="form-label" for="form2Example1">Địa chỉ email</label>
        </div>

        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="password" id="form2Example2" class="form-control" />
            <label class="form-label" for="form2Example2">Mật khẩu</label>
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

        <a href="index.html"><button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">đăng nhập</button></a>

        <!-- Register buttons -->
        <div class="text-center">
            <p>Chưa có tài khoản<a href="dangki.php">Đăng kí</a></p>
        </div>
    </form>
    <!-- Register buttons -->
    </form>