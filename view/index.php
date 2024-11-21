<?php
include "../view/header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act){
        
        case 'trangchu':
            include "./front_end/index.php";
        break;
        case 'cuahang':
            include "./front_end/shop.php";
        break;
        case 'trang';
        break;
        case 'gioithieu';
        include "./front_end/about.php";
        break;
        case 'chitietcuahang';
        include "./front_end/shop-details.php";
        break;
        case 'giohang';
        include "./front_end/shopping-cart.php";
        break;
        case 'kiemtra';
        include "./front_end/checkout.php";
        break;
        case 'lienhe';
        include "./front_end/contact.php";
        break;
        default:
        break;
    }
}
else{

}
include "../view/footer.php";
?>