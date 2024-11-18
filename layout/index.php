<?php
ob_start();
session_start();
include "view/header.php" ;
$act=isset($_GET['act']) ? $_GET['act'] : 'index';
$id=isset($_GET['id']) ? $_GET['id']:'';
$idtl=isset($_GET['idtl']) ? $_GET['idtl']:'';
$action=isset($_GET['action']) ? $_GET['action']:'';
$ten=isset($_POST['ten']) ? $_POST['ten']:'';
$gia=isset($_POST['gia']) ? $_POST['gia']:'';
$sl=isset($_POST['sl']) ? $_POST['sl']:'';
$hinh=isset($_POST['hinh']) ? $_POST['hinh']:'';

// đăng nhập
$user=isset($_POST['user']) ? $_POST['user']:'';
$password=isset($_POST['password']) ? $_POST['password']:'';


//thông báo cần phải đăng nhập

if (isset($_SESSION['thongbao'])) {
    echo '<script >
            alert("' . $_SESSION['thongbao'] . '");
          </script>';

    unset($_SESSION['thongbao']);
}



switch ($act){
    case 'index':
        include_once 'controller/trangchuController.php';
        $trangchuController=new trangchuController($id,$idtl);
        break;

    case 'product':
        include_once 'controller/sanphamController.php';
        $sanphamController=new sanphamController($idtl,$idtg,$idnxb);
        break;


    case 'about':
        include_once 'controller/gioithieuController.php';
        $gioithieuController=new gioithieuController();
        break;


    case 'contact':
        include_once 'controller/lienheController.php';
        $lienheController=new lienheController();
        break;


    case 'article':
        include_once 'controller/baivietController.php';
        $baivietController=new baivietController();
        break;


    case 'cart':
        include_once 'controller/giohangController.php';
        $giohangController=new giohangController($action,$id,$ten,$gia,$sl,$hinh);
        break;


    case 'lichsu':
        include_once 'controller/donhangController.php';
        $donhangController=new donhangController($id,$action);
        break;


    case 'acc':
        include_once 'controller/taikhoanController.php';
        $taikhoanController=new taikhoanController();
        break;


    case 'register':
        include_once 'controller/dangkyController.php';
        $dangkyController=new dangkyController();
        break;


    case 'login':
        include_once 'controller/dangnhapController.php';
        $dangnhapController=new dangnhapController($user,$password);
        break;

    case 'logout':
        unset($_SESSION['user']);                        

        // Chuyển hướng người dùng về trang đăng nhập
        header("Location: index.php?act=login");
        exit();
        break;

    case 'detail':
        include_once 'controller/chitietsanphamController.php';
        $chitietsanphamController=new chitietsanphamController();
        break;
}

include "view/footer.php" ;
