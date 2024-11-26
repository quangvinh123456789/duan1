<?php
ob_start();
session_start();
include 'model/pdo.php';
include 'model/sanpham.php';
include 'model/danhmuc.php';
include 'model/taikhoan.php';
if (isset($_SESSION['iduser'])) {
    $tk =  selectone_tk($_SESSION['iduser']);
}
include './view/header.php';
include './view/home.php';
include 'model/validate_form.php';
include 'model/validate_pass.php';




// $list_sp_home = loadAll_sanpham();

if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangxuat':
            session_unset();
            header('location:index.php');
            break;
        case 'quenmk':
            if (isset($_POST['guiemail'])) {
                $email = $_POST['email'];
                // $sendMailMess = sendMail($email);
            }
            include_once 'view/taikhoan/quenmk.php';
            break;
        case 'ctsp':
            // $loadbl_sp = load_bl_sp($_GET['idsp']);
            $loadone_sp = loadAll_sanpham("", $_GET['idsp']);


            // $starss =  thong_ke_star($_GET['idsp']);
            // var_dump($starss);
            include_once 'view/ctsp.php';
            break;
        case 'listsp':
            if (isset($_POST['submit']) && $_POST['submit']) {
                // từ khóa
                if (isset($_POST['kyw'])) {
                    $key = $_POST['kyw'];
                    $_SESSION['key'] = $key;
                } else {
                    $key = "";
                }
                //gia
                if (isset($_POST['gia'])) {
                    $gia = $_POST['gia'];
                } else {
                    $gia = "";
                }
                //Kieu may
                if (isset($_POST['kieumay'])) {
                    $kieumay = $_POST['kieumay'];
                } else {
                    $kieumay = "";
                }
                // xuat xu
                if (isset($_POST['xuatxu'])) {
                    $xuatxu = $_POST['xuatxu'];
                } else {
                    $xuatxu = "";
                }
            } else {
                $key = $gia = $kieumay = $xuatxu = "";
                unset($_SESSION['key']);
            }
            // id danh mục
            if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            
            include_once 'view/listsp.php';
            break;
        case 'update_trangthai':
            // update_trangthai($_GET['id_dh']);
            header('Location: ?act=mytaikhoan');
            break;
        case 'mytaikhoan':
    }
}
include 'view/footer.php';
ob_end_flush();
