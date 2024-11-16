<?php
require_once "ConnectModel.php";

class AuthorModel {
    private $conn;

    public function __construct() {
        $database = new ConnectModel();
        $this->conn = $database->connect();
    }

    // Lấy tất cả tác giả
    public function getAllAuthors() {
        $stmt = $this->conn->prepare("SELECT * FROM tac_gia");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC) ?: [];
    }

    // Thêm tác giả
    public function addAuthor($ten_tacgia) {
        $stmt = $this->conn->prepare("INSERT INTO tac_gia (ten_tacgia) VALUES (:ten_tacgia)");
        $stmt->bindParam(':ten_tacgia', $ten_tacgia);
        return $stmt->execute(); // Trả về true nếu thành công
    }

    // Cập nhật tác giả
    public function updateAuthor($id, $ten_tacgia) {
        $stmt = $this->conn->prepare("UPDATE tac_gia SET ten_tacgia = :ten_tacgia WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':ten_tacgia', $ten_tacgia);
        return $stmt->execute(); // Trả về true nếu thành công
    }

    // Xóa tác giả
    public function deleteAuthor($id) {
        $stmt = $this->conn->prepare("DELETE FROM tac_gia WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute(); // Trả về true nếu thành công
    }
    public function getAuthorById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM tac_gia WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); // Trả về 1 dòng dữ liệu
    }
    
}
?>
