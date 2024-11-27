<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giỏ hàng</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Breadcrumb Section Begin -->
    
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Giỏ hàng</h4>
                        <div class="breadcrumb__links">

                            <a href="./index.html">Trang chủ</a>

                            <span>Giỏ hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Tổng cộng</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $tong = 0; // Khởi tạo tổng tiền
                                foreach ($_SESSION['mycart'] as $cart) { 
                                    $ttien = $cart[5] * $cart[4]; // Tính tổng tiền cho từng sản phẩm
                                    $tong += $ttien; // Cộng dồn vào tổng tiền
                                    var_dump($cart[0]);
                                    echo '
                                    <tr>
                                        <td class="product__cart__item">
                                            <div class="product__cart__item__pic">
                                                <img src="uploads/img_sp/'.$cart[2].'" alt="">
                                            </div>
                                            <div class="product__cart__item__text">
                                                <h6>' . htmlspecialchars($cart[1]) . '</h6>
                                                <h5>' . number_format($cart[5], 0, ",", ".") . ' VND</h5>
                                            </div>
                                        </td>
                                        <td class="quantity__item">
                                            ' . $cart[4] . '
                                        </td>
                                        <td class="cart__price">' . number_format($ttien, 0, ",", ".") . '</td>
                                        <td class="cart__close" >
                                        <a href="index.php?act=deletegiohang&id=' . $cart[0] . '">
                                        <i class="fa fa-close"></i></td>
                                    </tr>
                                    ';
                                }

                                
                               
                               
                                ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">


                                <a href="shop.php">Tiếp tục mua sắm</a>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <a href="#"><i class="fa fa-spinner"></i>Cập nhật giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart__discount">
                        <h6>Mã giảm giás</h6>
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <button type="submit">Áp dụng</button>
                        </form>
                    </div>
                    <div class="cart__total">
                        <h6>Tổng số giỏ hàng</h6>
                        <ul>
                            <li>Tổng cộng <span><?=  number_format($tong, 0, ",", ".")  ?></span></li>
                        </ul>
                        <a href="checkout.php" class="primary-btn">Tiến hành thanh toán</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->



