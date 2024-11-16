<?php
class donhangController{
    public function __construct($id){
        include_once 'models/donhangmodel.php';
        $DonHangModel = new DonHangModel();
       

        if($id != ''){
            $DonHangModel -> ctdh($id);
            $ctdh = $DonHangModel -> ctdonhang;
            include_once 'view/chitietdonhang.php';
        }else{
            $DonHangModel -> dsdh();
            $dh = $DonHangModel-> donhang;
            include_once 'view/lichsumuahang.php';

        }

    }
}