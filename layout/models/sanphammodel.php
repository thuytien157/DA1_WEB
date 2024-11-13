<?php
class SanPhamModel
{
    public $dm;
    public $sp;
    public function dsdm()
    {
        include_once 'models/connectmodel.php';
        $dulieu = new ConnectModel();
        $sql = 'select * from dmsp';
        $this->dm = $dulieu->selectall($sql);
    }

    public function dssp()
    {
        include_once 'models/connectmodel.php';
        $dulieu = new ConnectModel();
        $sql = 'select * from sanpham';
        $this->sp = $dulieu->selectall($sql);
    }
    public function sdsptheodm($iddm)
    {
        include_once 'models/connectmodel.php';
        $dulieu = new ConnectModel();
        $sql = "select * from sanpham where iddm=:iddm";
        $dulieu->ketnoi();
        $stmt = $dulieu->conn->prepare($sql);
        $stmt->bindParam(":iddm",$iddm);
        $stmt->execute();
        $kq = $stmt->fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC : chuyển dl mãng lk
        $dulieu->conn = null; // đóng kết nối database
        return $kq; // biến này chứa mãng các dòng dữ liệu trả về.
    }
}
