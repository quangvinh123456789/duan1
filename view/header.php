<?php
// Kết nối database
$conn = new mysqli("localhost", "root", "", "duan1");

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy danh sách sản phẩm từ bảng `products`
$sql = "SELECT id, name, img, gia, gia_new FROM sanpham ORDER BY id DESC";
$result = $conn->query($sql);

// Lưu dữ liệu sản phẩm vào mảng `$products`
$products = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="./view/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="./view/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./view/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="./view/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="./view/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="./view/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="./view/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="./view/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
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
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Miễn phí vận chuyển, đảm bảo hoàn trả hoặc hoàn tiền trong 30 ngày.</p>
                        </div>
                    </div>
                    <?php
                    if (isset($_SESSION['user'])) { ?>
                        <div class="col-lg-6 col-md-7">
                            <div class="header__top__right">
                                <div class="header__top__links">
                                    <img src="./admin/img/undraw_profile.svg" alt="loi" style="width: 20px;" />
                                    <span class="span" style="color: yellow">Xin chào, <?= $tk['user'] ?></span> <br />
                                    <span class="span" style="color: blueviolet;"><?= (isset($_SESSION['role']) && $_SESSION['role'] === 1) ? 'Admin' : 'Khách hàng' ?></span>
                                    <ul class="tt-taikhoan">
                                        <?php
                                        if ($_SESSION['role'] === 1) { ?>
                                            <a href="admin/">Quản trị viên</a>
                                            <a href="?act=dangxuat">Đăng Xuất</a>
                                        <?php } else { ?>
                                            <span><a>Tài Khoản</a></span>
                                            <br>
                                            <span><a href="?act=dangxuat">Đăng Xuất</a></span>
                                        <?php  }

                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a href="./view/dangnhap.php">Đăng nhập</a>
                                <a href="#">FAQs</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
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