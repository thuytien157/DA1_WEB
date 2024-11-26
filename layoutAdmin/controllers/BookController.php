<?php
require_once "model/BookModel.php";

class BookController {
    private $bookModel;

    public function __construct() {
        $this->bookModel = new BookModel();
    }

    public function listBooks() {
        $books = $this->bookModel->getAllBooks();
        if (!$books) {
            $books = [];
        }
        require_once "Views/book.php";
    }
    // public function addBooks($id_theloai, $id_tacgia, $id_nxb, $ten_sach, $hinh, $gia, $giam, $mo_ta, $nam_xb, $so_luong_ban) {
    //     $result = $this->bookModel->addBooks($id_theloai, $id_tacgia, $id_nxb, $ten_sach, $hinh, $gia, $giam, $mo_ta, $nam_xb, $so_luong_ban);
    //   if ($result === false) {
    //     throw new Exception("Không thể thêm sách vào cơ sở dữ liệu.");
    // }
    // return $result;





    public function deleteBook($id) {
        $result = $this->bookModel->deleteBook($id);
        
    }
}


   



  
    
    


?>
