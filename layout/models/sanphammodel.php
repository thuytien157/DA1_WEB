<?php
class SanPhamModel
{
    public $theloai;
    public $sp;
    public function dstl()
    {
        include_once 'models/connectmodel.php';
        $dulieu = new ConnectModel();
        $sql = 'select * from the_loai';
        $this->theloai = $dulieu->selectall($sql);
    }

    public function dssp()
    {
        include_once 'models/connectmodel.php';
        $dulieu = new ConnectModel();
        $sql = 'select * from sach';
        $this->sp = $dulieu->selectall($sql);
    }
    public function sdsptheotl($idtl)
    {
        include_once 'models/connectmodel.php';
        $dulieu = new ConnectModel();
        $sql = "select * from sach where id_theloai=:id_theloai";
        $dulieu->ketnoi();
        $stmt = $dulieu->conn->prepare($sql);
        $stmt->bindParam(":id_theloai",$idtl);
        $stmt->execute();
        $kq = $stmt->fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC : chuyển dl mãng lk
        $dulieu->conn = null; // đóng kết nối database
        return $kq; // biến này chứa mãng các dòng dữ liệu trả về.
    }
}
