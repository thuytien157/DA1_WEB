<?php
require_once "ConnectModel.php";

class OrderModel
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
    // Thêm tác giả
    public function addOrder($id_khachhang, $ngay_giao_hang, $tt_thanhtoan, $tt_donhang, $dia_chi, $ghi_chu)
    {
        $stmt = $this->conn->prepare("INSERT INTO don_hang (id_khachhang,ngay_giao_hang,tt_thanhtoan,tt_donhang,dia_chi,ghi_chu) VALUES (:id_khachhang,:ngay_giao_hang,:tt_thanhtoan,:tt_donhang,:dia_chi,:ghi_chu)");
        $stmt->bindParam(':id_khachhang', $id_khachhang);
        $stmt->bindParam(':ngay_giao_hang', $ngay_giao_hang);
        $stmt->bindParam(':tt_thanhtoan', $tt_thanhtoan);
        $stmt->bindParam(':tt_donhang', $tt_donhang);
        $stmt->bindParam(':dia_chi', $dia_chi);
        $stmt->bindParam(':ghi_chu', $ghi_chu);
        return $stmt->execute(); // Trả về true nếu thành công
    }
    // Xóa tác giả
    public function deleteOrder($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM don_hang WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute(); // Trả về true nếu thành công
    }
    // Cập nhật tác giả
    public function updateOrder($id, $id_khachhang, $ngay_giao_hang, $tt_thanhtoan, $tt_donhang, $dia_chi, $ghi_chu)
    {
        $stmt = $this->conn->prepare("UPDATE don_hang SET id_khachhang = :id_khachhang, ngay_giao_hang = :ngay_giao_hang, tt_thanhtoan = :tt_thanhtoan, tt_donhang = :tt_donhang, dia_chi = :dia_chi, ghi_chu = :ghi_chu WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':id_khachhang', $id_khachhang);
        $stmt->bindParam(':ngay_giao_hang', $ngay_giao_hang);
        $stmt->bindParam(':tt_thanhtoan', $tt_thanhtoan);
        $stmt->bindParam(':tt_donhang', $tt_donhang);
        $stmt->bindParam(':dia_chi', $dia_chi);
        $stmt->bindParam(':ghi_chu', $ghi_chu);
        return $stmt->execute(); // Trả về true nếu thành công
    }

    public function getOrderById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM don_hang WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); // Trả về 1 dòng dữ liệu
    }
    public function isCustomerIdUnique($id_khachhang)
    {
        $stmt = $this->conn->prepare("SELECT COUNT(*) FROM don_hang WHERE id_khachhang = :id_khachhang");
        $stmt->bindParam(':id_khachhang', $id_khachhang);
        $stmt->execute();
        return $stmt->fetchColumn() == 0; // Trả về true nếu không tìm thấy bản ghi nào
    }
     public function checkOrderRelations($id_donhang)
    {
        $stmt = $this->conn->prepare("SELECT COUNT(*) FROM chi_tiet_don_hang WHERE id_donhang = :id_donhang");
        $stmt->bindParam(':id_donhang', $id_donhang, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchColumn() > 0; // Trả về true nếu có bản ghi liên kết
    }
}
