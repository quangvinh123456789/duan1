<?php

include 'view/header.php';


if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'trangchu':
            include './view/home.php';
            break;
        case 'cuahang':
            include './view/shop.php';

            break;
        case 'gioithieu':
            include './view/about.php';

            break;
        case 'chitietcuahang':
            include './view/home.php';

            break;
        case 'giohang':
            include './view/shopping-cart.php';

            break;
        case 'kietra':
            include './view/checkout.php';

            break;
        case 'lienhe':
            include './view/contact.php';

            break;
        default:
            # code...
            break;
    }
} else {
}
include   'view/footer.php';
