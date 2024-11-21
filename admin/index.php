<?php
include "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act){
        case 'trangchu':
        break;
        case 'cuahang':
        break;
        case 'trang';
        break;
        case 'liên hệ';
        break;
        default:
        break;
    }
}
else{

}
include "footer.php";
?>