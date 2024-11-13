<?php
class trangchuModel
{
    public $mangsp;
    // public $motsp;
    // public $splienquan;
    public function dssp()
    {
        include_once 'models/connectmodel.php';
        $data = new ConnectModel();
        $sql = "select * from sach";
        $this->mangsp = $data->selectall($sql);
    }
    // public function onesp($id)
    // {
    //     include_once 'models/connectmodel.php';
    //     $data = new ConnectModel();
    //     $sql = "select * from sanpham where id=:id";
    //     $this->motsp = $data->selectone($sql,$id);  
    // }
    // public function splienquan($id,$iddm)
    // {
    //     include_once 'models/connectmodel.php';
    //     $data = new ConnectModel();
    //     $sql = "select * from sanpham where iddm=:iddm and id<>:id";
    //     $data->ketnoi();
    //     $stmt =  $data->conn->prepare($sql);
    //     $stmt->bindParam(":id",$id);
    //     $stmt->bindParam(":iddm",$iddm);
    //     $stmt->execute();
    //     $kq = $stmt->fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC : chuyển dl mãng lk
    //     $data->conn = null; // đóng kết nối database
    //     $this->splienquan= $kq; // biến này chứa mãng các dòng dữ liệu trả về.
    // }
}

