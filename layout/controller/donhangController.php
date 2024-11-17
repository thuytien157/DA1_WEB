<?php
class donhangController {
    public function __construct($id, $action) {
        include_once 'dangnhapController.php';
        include_once 'models/donhangmodel.php';
        $DonHangModel = new DonHangModel();

        //lấy id từ id user đã đăng nhập
        $userId = isset($userId) ? $userId : '';        

        if (isset($_SESSION['id'])) {
            $userId = $_SESSION['id']; 
        }
        if ($action == 'huy' && $id != '') {
            $DonHangModel->huydonhang($id);
            header("location: ./index.php?act=lichsu&id=" . $userId);
            exit();
        } elseif ($action == 'xemchitiet') {
            $DonHangModel->ctdh($id);
            $ctdh = $DonHangModel->ctdonhang;
            include_once 'view/chitietdonhang.php';
        } else{
            $DonHangModel->dsdh($userId);
            $dh = $DonHangModel->donhang;
            include_once 'view/lichsumuahang.php';  
        }
    }
}


