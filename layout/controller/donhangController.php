<?php
class donhangController{
    public function __construct($id,$action){
        include_once 'models/donhangmodel.php';
        $DonHangModel = new DonHangModel();
       

        if($action == 'huy' && $id != ''){
            $DonHangModel -> huydonhang($id);

            // view lại trang
            header("location: ./index.php?act=lichsu");
            exit();

        }elseif($id != ''){
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

