<?php
class DatHangModel {
    public $sanpham;

    public function capnhat_user($id, $ho_ten, $sdt) {
        include_once 'models/connectmodel.php';
        $data = new ConnectModel();
    
        $sql = 'UPDATE user SET ho_ten = :ho_ten, sdt = :sdt WHERE id = :id';
        $params = array(':ho_ten' => $ho_ten, ':sdt' => $sdt, ':id' => $id);
        $data->modify($sql, $params);
    }

    public function themdh($id_khachhang, $dia_chi, $tt_thanhtoan, $ghi_chu) {
        include_once 'models/connectmodel.php';
        $data = new ConnectModel();
        $conn = $data->ketnoi();
    
        $sql = "INSERT INTO don_hang (id_khachhang, dia_chi, tt_donhang, tt_thanhtoan, ghi_chu, ngay_giao_hang) 
        VALUES (:id_khachhang, :dia_chi, 'Chờ xử lý', :tt_thanhtoan, :ghi_chu, NOW())";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':id_khachhang' => $id_khachhang,
            ':dia_chi' => $dia_chi,
            ':tt_thanhtoan' => $tt_thanhtoan,
            ':ghi_chu' => $ghi_chu
        ]);
    
            return $conn->lastInsertId();
            $conn = null; 
        
    }
         
    public function themctdh($id_donhang, $id_sach, $so_luong)
    {
        include_once 'models/connectmodel.php';
        $data = new ConnectModel();
        
        $sql = "INSERT INTO chi_tiet_don_hang (id_donhang, id_sach, so_luong) 
                VALUES (:id_donhang, :id_sach, :so_luong)";
        
        $params = array(':id_donhang' => $id_donhang, ':id_sach' => $id_sach, ':so_luong' => $so_luong);
        $data->modify($sql, $params);
    }
            
    public function sanpham($id) {
        include_once 'models/connectmodel.php';
        $data = new ConnectModel();
        $sql = "SELECT * FROM sach WHERE id = :id";
        return $data->selectone($sql, $id); 
    }
    
}
?>