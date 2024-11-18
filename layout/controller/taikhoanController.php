<?php
class taikhoanController{
    public function __construct(){
        include_once 'dangnhapController.php';

        if(isset($_SESSION['user'])){
            include_once "view/taikhoan.php";
        }else{
            $_SESSION['thongbao'] = 'Bạn cần phải đăng nhập';
            header('location: ./index.php');
        }
    }
}