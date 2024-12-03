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
    public function addBooks($id_theloai, $id_tacgia, $id_nxb, $ten_sach, $hinh, $gia, $giam, $mo_ta, $nam_xb, $so_luong_ban) {
        if (!is_int($id_theloai) || !is_int($id_tacgia) || !is_int($id_nxb)) {
            throw new Exception("id không hợp lệ");
        }
        $stmt = $this->conn->prepare("INSERT INTO sach (id_theloai, id_tacgia, id_nxb, ten_sach, hinh, gia, giam, mo_ta, nam_xb, so_luong_ban, ngay_nhap) 
                                       VALUES (:id_theloai, :id_tacgia, :id_nxb, :ten_sach, :hinh, :gia, :giam, :mo_ta, :nam_xb, :so_luong_ban, NOW())");
    
        $stmt->bindParam(':id_theloai', $id_theloai);
        $stmt->bindParam(':id_tacgia', $id_tacgia);
        $stmt->bindParam(':id_nxb', $id_nxb);
        $stmt->bindParam(':ten_sach', $ten_sach);
        $stmt->bindParam(':hinh', $hinh);
        $stmt->bindParam(':gia', $gia);
        $stmt->bindParam(':giam', $giam);
        $stmt->bindParam(':mo_ta', $mo_ta);
        $stmt->bindParam(':nam_xb', $nam_xb);
        $stmt->bindParam(':so_luong_ban', $so_luong_ban);
        $stmt->execute();
        return $this->conn->lastInsertId();

    }

    public function add_DetailBooks($id_sach, $nha_cung_cap, $ngon_ngu, $trong_luong, $kich_thuoc, $so_luong_trang, $hinh_thuc, $so_luong){
        $stmt = $this->conn->prepare("INSERT INTO chi_tiet_sach (id_sach, nha_cung_cap, ngon_ngu, trong_luong, kich_thuoc, so_luong_trang, hinh_thuc, so_luong) 
        VALUES (:id_sach, :nha_cung_cap, :ngon_ngu, :trong_luong, :kich_thuoc, :so_luong_trang, :hinh_thuc, :so_luong)"); 

        $stmt->bindParam(':id_sach', $id_sach);
        $stmt->bindParam(':nha_cung_cap', $nha_cung_cap);
        $stmt->bindParam(':ngon_ngu', $ngon_ngu);
        $stmt->bindParam(':trong_luong', $trong_luong);
        $stmt->bindParam(':kich_thuoc', $kich_thuoc);
        $stmt->bindParam(':so_luong_trang', $so_luong_trang);
        $stmt->bindParam(':hinh_thuc', $hinh_thuc);
        $stmt->bindParam(':so_luong', $so_luong);
        
        $stmt->execute();
    }

    public function updateBook($id, $id_theloai, $id_tacgia, $id_nxb, $ten_sach, $hinh, $gia, $giam, $mo_ta, $nam_xb, $so_luong_ban) {
        $stmt = $this->conn->prepare(
            "UPDATE sach 
            SET ten_sach = :ten_sach, 
                id_theloai = :ten_theloai, 
                id_tacgia = :ten_tacgia, 
                id_nxb = :ten_nxb, 
                gia = :gia, 
                giam = :giam, 
                mo_ta = :mo_ta, 
                nam_xb = :nam_xb, 
                so_luong_ban = :so_luong_ban,
                hinh = :hinh
            WHERE id = :id"
        );
        $stmt->bindParam(':ten_sach', $ten_sach);
        $stmt->bindParam(':ten_theloai', $id_theloai);
        $stmt->bindParam(':ten_tacgia', $id_tacgia);
        $stmt->bindParam(':ten_nxb', $id_nxb);
        $stmt->bindParam(':gia', $gia);
        $stmt->bindParam(':giam', $giam);
        $stmt->bindParam(':mo_ta', $mo_ta);
        $stmt->bindParam(':nam_xb', $nam_xb);
        $stmt->bindParam(':so_luong_ban', $so_luong_ban);
        $stmt->bindParam(':hinh', $hinh);
        $stmt->bindParam(':id', $id);
    
        return $stmt->execute();
    }

    public function deleteBook($id) {
        $stmt = $this->conn->prepare("SELECT hinh FROM sach WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $book = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($book && isset($book['hinh']) && file_exists($book['hinh'])) {
            unlink($book['hinh']);
        }
        $stmt = $this->conn->prepare("DELETE FROM sach WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute(); 
        
    }


    public function getBookById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM sach WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); 
    }
    
    
}


 
?>
