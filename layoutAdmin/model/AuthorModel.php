<?php
require_once "ConnectModel.php";

class AuthorModel {
    private $conn;

    public function __construct() {
        $database = new ConnectModel();
        $this->conn = $database->connect();
    }

    public function getAllAuthors() {
        $stmt = $this->conn->prepare("SELECT * FROM tac_gia"); //prepare chuan bi cau lenh truy van tra ve cho $stmt
        $stmt->execute();//cau lenh thuc thi
        return $stmt->fetchAll(PDO::FETCH_ASSOC) ?: []; //lay all du lieu theo cau lenh va tra ve dang keys&values
    }

    public function addAuthor($ten_tacgia) {
        $stmt = $this->conn->prepare("INSERT INTO tac_gia (ten_tacgia) VALUES (:ten_tacgia)");
        $stmt->bindParam(':ten_tacgia', $ten_tacgia);
        return $stmt->execute(); //tra ve true neu thanh cong va ngươc lai
    }

    public function updateAuthor($id, $ten_tacgia) {
        $stmt = $this->conn->prepare("UPDATE tac_gia SET ten_tacgia = :ten_tacgia WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':ten_tacgia', $ten_tacgia);
        return $stmt->execute(); 
    }

    public function deleteAuthor($id) {

        // kiểm tra xem tác giả có sách hay không
        $stmtCheck = $this->conn->prepare("SELECT COUNT(*) as book_count FROM sach WHERE id_tacgia = :id");
        $stmtCheck->bindParam(':id', $id);
        $stmtCheck->execute();
        $result = $stmtCheck->fetch(PDO::FETCH_ASSOC);

    if ($result['book_count'] > 0) {
        return false;
    }
        $stmt = $this->conn->prepare("DELETE FROM tac_gia WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute(); 
    }
    public function getAuthorById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM tac_gia WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); //lay 1 dong du lieu
    }
    
}
?>
