
<?php
include "view/header.php" ;

$act=isset($_GET['act']) ? $_GET['act'] : 'index';


switch ($act){
    case 'index':
        include_once 'controller/trangchuController.php';
        $trangchuController=new trangchuController();
        break;

    case 'product':
        include_once 'controller/sanphamController.php';
        $sanphamController=new sanphamController();
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
        $giohangController=new giohangController();
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
        $dangnhapController=new dangnhapController();
        break;


}

include "view/footer.php" ;
