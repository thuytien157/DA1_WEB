<?php
require_once "ConnectModel.php";

class PublishingHouseModel {
    private $conn;

    public function __construct() {
        $database = new ConnectModel();
        $this->conn = $database->connect();
    }

    public function getAllPublishingHouses() {
        $stmt = $this->conn->prepare("SELECT * FROM nha_xuat_ban");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC) ?: [];
    }


    public function addPublishingHouse($ten_nxb) {
        $stmt = $this->conn->prepare("INSERT INTO nha_xuat_ban (ten_nxb) VALUES (:ten_nxb)");
        $stmt->bindParam(':ten_nxb', $ten_nxb);
        return $stmt->execute(); 
    }

    public function updatePublishingHouse($id, $ten_nxb) {
        $stmt = $this->conn->prepare("UPDATE nha_xuat_ban SET ten_nxb = :ten_nxb WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':ten_nxb', $ten_nxb);
        return $stmt->execute(); 
    }

 
    public function deletePublishingHouse($id) {
        $stmt = $this->conn->prepare("DELETE FROM nha_xuat_ban WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function getPublishingHouseById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM nha_xuat_ban WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); 
    }
}
?>
