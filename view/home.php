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
    <link rel="stylesheet" href="view/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="view/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="view/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="view/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="view/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="view/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="view/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="view/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="login.php">Đăng nhập</a>
                <a href="#">FAQs</a>
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
                                <a href="login.php">Đăng nhập</a>
                                <a href="#">FAQs</a>
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

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="img2/banner1.webp">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">

                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="img2/banner2.webp">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Sản phẩm chính</li>
                    </ul>
                </div>
            </div>
            <?php if (!empty($products)): ?>
                <?php foreach ($products as $product): ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product__item">
                            <a href="?act=ctsp&idsp=<?= $product['id'] ?>">
                                <div class="product__item__pic">
                                    <img src="./uploads/img_sp/<?= htmlspecialchars($product['img']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" />
                                </div>
                                <br>
                                <div class="product__item__text">
                                    <h6><?= htmlspecialchars($product['name']) ?></h6>
                                    <div class="price">
                                        <p>
                                            <span class="text-muted" style="text-decoration: line-through; margin-right: 10px;">
                                                <?= number_format($product['gia']) ?> ₫
                                            </span>
                                            <span class="text-danger font-weight-bold">
                                                <?= number_format($product['gia_new']) ?> ₫
                                            </span>
                                        </p>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Hiện không có sản phẩm nào để hiển thị.</p>
            <?php endif; ?>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Categories Section Begin -->
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="categories__text">
                        <h2> Đồng hồ<br /><span>Bộ siêu tập</span> <br />Phụ kiện</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories__hot__deal">
                        <img src="img2/sanpham_sale.png" alt="">
                        <div class="hot__deal__sticker">
                            <span>Sale Of</span>
                            <h5>$29.99</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="categories__deal__countdown">
                        <span>Discount during the month</span>
                        <h2>Đồng hồ nam Tissot Chemin des Tourelles Powermatic 80</h2>
                        <div class="categories__deal__countdown__timer" id="countdown">
                            <div class="cd-item">
                                <span>29</span>
                                <p>Days</p>
                            </div>
                            <div class="cd-item">
                                <span>1</span>
                                <p>Hours</p>
                            </div>
                            <div class="cd-item">
                                <span>50</span>
                                <p>Minutes</p>
                            </div>
                            <div class="cd-item">
                                <span>18</span>
                                <p>Seconds</p>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">Mua ngay bây giờ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Instagram Section Begin -->
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="productspad1">
        <div class="container">
            <div class="row">
                <h2>Sản phẩm mới</h2>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->