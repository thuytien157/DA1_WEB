<?php
class trangchuModel
{
    public $mangsp;
    public $mangspmoi;
    public $mangspsale;
    // public $motsp;
    // public $splienquan;
    public function dssp()
    {
        include_once 'models/connectmodel.php';
        $data = new ConnectModel();
        $sql = "SELECT * from sach where so_luong_ban > 1000 order by so_luong_ban desc ";
        $this->mangsp = $data->selectall($sql);
    }
    public function dsspMoi() 
    { 
        include_once 'models/connectmodel.php'; 
        $data = new ConnectModel(); 
        // Truy vấn để lấy các sản phẩm mới nhập, giả sử có cột 'ngay_nhap' 
        $sql = "SELECT * FROM sach WHERE ngay_nhap >= '2024-01-07' ORDER BY ngay_nhap DESC";
        $this->mangspmoi = $data->selectall($sql); 
    }
    public function dsspSale()
    {
        include_once 'models/connectmodel.php';
        $data = new ConnectModel();
        $sql = "SELECT * from sach where giam > 0 order by giam desc";
        $this->mangspsale = $data->selectall($sql);
    }
    
    public function onesp($id)
    {
        include_once 'models/connectmodel.php';
        $data = new ConnectModel();
        $sql = "select * from sach where id=:id";
        $this->motsp = $data->selectone($sql,$id);  
    }
    public function splienquan($id,$idtl)
    {
        include_once 'models/connectmodel.php';
        $data = new ConnectModel();
        $sql = "select * from sach where iddm=:iddm and id<>:id";
        $data->ketnoi();
        $stmt =  $data->conn->prepare($sql);
        $stmt->bindParam(":id",$id);
        $stmt->bindParam(":iddm",$iddm);
        $stmt->execute();
        $kq = $stmt->fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC : chuyển dl mãng lk
        $data->conn = null; // đóng kết nối database
        $this->splienquan= $kq; // biến này chứa mãng các dòng dữ liệu trả về.
    }
}

