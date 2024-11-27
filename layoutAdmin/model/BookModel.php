<?php
require_once "ConnectModel.php";

class BookModel {
    private $conn;

   public function __construct() {
        $database = new ConnectModel();
        $this->conn = $database->connect();
    }
    public function getAllBooks() {
        $stmt = $this->conn->prepare("SELECT b.*, t.ten_theloai, tg.ten_tacgia, n.ten_nxb
                FROM sach b
                LEFT JOIN the_loai t ON b.id_theloai = t.id
                LEFT JOIN tac_gia tg ON b.id_tacgia = tg.id
                LEFT JOIN nha_xuat_ban n ON b.id_nxb = n.id");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC) ?: []; }


    // public function dstacgia() {
    //     $stmt = $this->conn->prepare("SELECT * FROM tac_gia"); //prepare chuan bi cau lenh truy van tra ve cho $stmt
    //     $stmt->execute();//cau lenh thuc thi
    //     return $stmt->fetchAll(PDO::FETCH_ASSOC) ?: []; //lay all du lieu theo cau lenh va tra ve dang keys&values
    // }
    //
    // public function addBooks($id_theloai, $id_tacgia, $id_nxb, $ten_sach, $hinh, $gia, $giam, $mo_ta, $nam_xb, $so_luong_ban) {
    //     if (!is_int($id_theloai) || !is_int($id_tacgia) || !is_int($id_nxb)) {
    //         throw new Exception("id khong hop le"); //kiem tra so nguyen
    //     }
    //     if (!is_numeric($nam_xb) || strlen((string)$nam_xb) != 4) {
    //         throw new Exception("nam khong hop le");
    //     }
    //     $stmt = $this->conn->prepare("INSERT INTO sach (id_theloai, id_tacgia, id_nxb, ten_sach, hinh, gia, giam, mo_ta, nam_xb, so_luong_ban, ngay_nhap) 
    //                                    VALUES (:id_theloai, :id_tacgia, :id_nxb, :ten_sach, :hinh, :gia, :giam, :mo_ta, :nam_xb, :so_luong_ban, NOW())");
    
    //     if (!$stmt) {
    //         throw new Exception("Prepare statement failed: " . implode(", ", $this->conn->errorInfo()));
    //     }
    //     $stmt->bindParam(':id_theloai', $id_theloai);
    //     $stmt->bindParam(':id_tacgia', $id_tacgia);
    //     $stmt->bindParam(':id_nxb', $id_nxb);
    //     $stmt->bindParam(':ten_sach', $ten_sach);
    //     $stmt->bindParam(':hinh', $hinh);
    //     $stmt->bindParam(':gia', $gia);
    //     $stmt->bindParam(':giam', $giam);
    //     $stmt->bindParam(':mo_ta', $mo_ta);
    //     $stmt->bindParam(':nam_xb', $nam_xb);
    //     $stmt->bindParam(':so_luong_ban', $so_luong_ban);
    
    //     if ($stmt->execute()) {
    //         return $this->conn->lastInsertId();
    //     } else {
    //         throw new Exception("Execute failed: " . implode(", ", $stmt->errorInfo()));
    //     }
    // }

    public function deleteBook($id) {
        $stmt = $this->conn->prepare("DELETE FROM sach WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute(); 
    }
    
}


 
?>
