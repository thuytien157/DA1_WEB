<?php
class DonHangModel
{
    public $donhang;
    public $ctdonhang;

    public function dsdh()
    {
        include_once 'models/connectmodel.php';
        $dulieu = new ConnectModel();
        $sql = 'SELECT *
                FROM don_hang
                INNER JOIN chi_tiet_don_hang
                ON don_hang.id = chi_tiet_don_hang.id_donhang
                INNER JOIN user
                ON user.id = don_hang.id_khachhang
                INNER JOIN sach
                ON sach.id = chi_tiet_don_hang.id_sach';
        $this->donhang = $dulieu->selectall($sql);
    }

    public function ctdh($id)
    {
        include_once 'models/connectmodel.php';
        $data = new ConnectModel();
        
        $sql = "SELECT 
                don_hang.id AS donhang_id,
                don_hang.ngay_giao_hang,
                don_hang.dia_chi,
                don_hang.tt_donhang,
                don_hang.tt_thanhtoan,
                don_hang.ghi_chu,
                chi_tiet_don_hang.so_luong,
                sach.id AS sach_id,
                sach.ten_sach,
                sach.gia,
                sach.hinh
                FROM don_hang
                INNER JOIN chi_tiet_don_hang 
                ON don_hang.id = chi_tiet_don_hang.id_donhang
                INNER JOIN user 
                ON user.id = don_hang.id_khachhang
                INNER JOIN sach
                ON sach.id = chi_tiet_don_hang.id_sach
                WHERE don_hang.id = :id";   
        $this->ctdonhang = $data->selectone($sql, $id);
    }

    public function huydonhang($id)
    {
        include_once 'models/connectmodel.php';
        $data = new ConnectModel();
        
        $sql = "UPDATE don_hang
                SET tt_donhang = 'Đã hủy'
                WHERE id = :id";
        $data->selectone($sql, $id);
    }
}
