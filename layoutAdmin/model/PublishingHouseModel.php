<?php
require_once "ConnectModel.php";

class PublishingHouseModel {
    private $conn;

    public function __construct() {
        $database = new ConnectModel();
        $this->conn = $database->connect();
    }

    // Lấy tất cả nhà xuất bản
    public function getAllPublishingHouses() {
        $stmt = $this->conn->prepare("SELECT * FROM nha_xuat_ban");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC) ?: []; // Trả về mảng rỗng nếu không có dữ liệu
    }

    // Thêm nhà xuất bản
    public function addPublishingHouse($ten_nxb) {
        $stmt = $this->conn->prepare("INSERT INTO nha_xuat_ban (ten_nxb) VALUES (:ten_nxb)");
        $stmt->bindParam(':ten_nxb', $ten_nxb);
        return $stmt->execute(); // Trả về true nếu thành công
    }

    // Cập nhật nhà xuất bản
    public function updatePublishingHouse($id, $ten_nxb) {
        $stmt = $this->conn->prepare("UPDATE nha_xuat_ban SET ten_nxb = :ten_nxb WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':ten_nxb', $ten_nxb);
        return $stmt->execute(); // Trả về true nếu thành công
    }

    // Xóa nhà xuất bản
    public function deletePublishingHouse($id) {
        $stmt = $this->conn->prepare("DELETE FROM nha_xuat_ban WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute(); // Trả về true nếu thành công
    }

    // Lấy nhà xuất bản theo ID
    public function getPublishingHouseById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM nha_xuat_ban WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); // Trả về 1 dòng dữ liệu
    }
}
?>
