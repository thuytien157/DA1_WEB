
<?php
include "view/header.php" ;

$act=isset($_GET['act']) ? $_GET['act'] : 'index';
$id=isset($_GET['id']) ? $_GET['id']:'';
$idtl=isset($_GET['idtl']) ? $_GET['idtl']:'';
$idtg=isset($_GET['idtg']) ? $_GET['idtg']:'';
$idnxb=isset($_GET['idnxb']) ? $_GET['idnxb']:'';

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
        $giohangController=new giohangController();
        break;


    case 'lichsu':
        include_once 'controller/lichsumuahangController.php';
        $lichsumuahangController=new lichsumuahangController();
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

    case 'detail':
        include_once 'controller/chitietsanphamController.php';
        $chitietsanphamController=new chitietsanphamController();
        break;


}

include "view/footer.php" ;
