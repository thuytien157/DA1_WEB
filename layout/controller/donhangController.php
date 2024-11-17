<?php
class donhangController {
    public function __construct($id, $action,$dia_chi) {
        include_once 'dangnhapController.php';
        include_once 'models/donhangmodel.php';
        $DonHangModel = new DonHangModel();

        //lấy id từ id user đã đăng nhập
        $userId = isset($userId) ? $userId : '';  


        if (isset($_SESSION['id'])) {
            $userId = $_SESSION['id']; 
        }

        //huỷ đơn hàng
        if($action == 'huy' && $id != '') {
            $DonHangModel->huydonhang($id);
            header("location: ./index.php?act=lichsu&id=" . $userId);
            exit();

            //xem chi tiết đơn hang
            }elseif($action == 'xemchitiet') {
                $DonHangModel->ctdh($id);
                $ctdh = $DonHangModel->ctdonhang;
                include_once 'view/chitietdonhang.php';

            //thay đổi địa chỉ nhận hàng
            }elseif($action == 'doidiachi'){
                include_once 'view/chitietdonhang.php';
                $dia_chi = $_POST['dia_chi'];
                $DonHangModel->capnhatdiachi($id, $dia_chi);
                header("location: ./index.php?act=lichsu&id=" . $userId);
                exit();            
        }else{
            $DonHangModel->dsdh($userId);
            $dh = $DonHangModel->donhang;
            include_once 'view/lichsumuahang.php';  
        }
    }
}


