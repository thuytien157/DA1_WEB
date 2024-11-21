<?php
require_once "ConnectModel.php";

class orderModel
{
    private $conn;

    public function __construct()
    {
        $database = new ConnectModel();
        $this->conn = $database->connect();
    }

    // Lấy tất cả tác giả
    public function getAllOrders()
    {
        $stmt = $this->conn->prepare(" SELECT don_hang.*, user.ho_ten AS ten_khachhang FROM don_hang JOIN user ON don_hang.id_khachhang = user.id ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC) ?: [];
    }
    public function updateOrderStatus($id, $tt_donhang) {
        $stmt = $this->conn->prepare("UPDATE don_hang SET tt_donhang = :tt_donhang WHERE id = :id");
        $stmt->bindParam(':tt_donhang', $tt_donhang);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
    
}
