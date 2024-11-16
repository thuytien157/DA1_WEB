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
        
        $sql = "SELECT *
                FROM don_hang
                INNER JOIN chi_tiet_don_hang
                ON don_hang.id = chi_tiet_don_hang.id_donhang
                INNER JOIN user
                ON user.id = don_hang.id_khachhang
                INNER JOIN sach
                ON sach.id = chi_tiet_don_hang.id_sach
                WHERE don_hang.id = :id";   
        $this->ctdonhang = $data->selectone($sql, $id);;
    }
}
