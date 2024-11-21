<?php
require_once "ConnectModel.php";

class CategoryModel {
    private $conn;

    public function __construct() {
        $database = new ConnectModel();
        $this->conn = $database->connect();
    }

    // Lấy tất cả tác giả
    public function getAllCategory() {
        $stmt = $this->conn->prepare("SELECT * FROM the_loai");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC) ?: [];
    }

    // Thêm tác giả
    public function addCategory($ten_theloai) {
        $stmt = $this->conn->prepare("INSERT INTO the_loai (ten_theloai) VALUES (:ten_theloai)");
        $stmt->bindParam(':ten_theloai', $ten_theloai);
        return $stmt->execute(); 
    }

    // Cập nhật tác giả
    public function updateCategory($id, $ten_theloai) {
        $stmt = $this->conn->prepare("UPDATE the_loai SET ten_theloai = :ten_theloai WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':ten_theloai', $ten_theloai);
        return $stmt->execute(); 
    }

    // Xóa tác giả
    public function deleteCategory($id) {
        $stmt = $this->conn->prepare("DELETE FROM the_loai WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute(); 
    }
    public function getCategoryById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM the_loai WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); // Trả về 1 dòng dữ liệu
    }
    
}
?>
