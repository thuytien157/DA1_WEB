<?php
require_once "model/BookModel.php";
require_once "model/AuthorModel.php";
require_once "model/CategoryModel.php";
require_once "model/PublishingHouseModel.php";

class BookController {
    private $bookModel;
    private $authorModel;
    private $categoryModel;
    private $publishinghouseModel;

    public function __construct() {
        $this->bookModel = new BookModel();
        $this->authorModel = new AuthorModel();
        $this->categoryModel = new categoryModel();
        $this->publishinghouseModel = new PublishingHouseModel();
    }

    public function listBooks() {
        $books = $this->bookModel->getAllBooks();
        $tg = $this->authorModel->getAllAuthors(); 
        $tl = $this->categoryModel->getAllCategory(); 
        $nxb = $this->publishinghouseModel->getAllPublishingHouses(); 
        require_once "Views/book.php";
    }

    public function addBooks($id_theloai, $id_tacgia, $id_nxb, $ten_sach, $hinh, $gia, $giam, $mo_ta, $nam_xb, $so_luong_ban, $nha_cung_cap, $ngon_ngu, $trong_luong, $kich_thuoc, $so_luong_trang, $hinh_thuc, $so_luong) {
        $id_sach = $this->bookModel->addBooks($id_theloai, $id_tacgia, $id_nxb, $ten_sach, $hinh, $gia, $giam, $mo_ta, $nam_xb, $so_luong_ban);
        if($id_sach){
            $this->bookModel->add_DetailBooks($id_sach, $nha_cung_cap, $ngon_ngu, $trong_luong, $kich_thuoc, $so_luong_trang, $hinh_thuc, $so_luong);
        }
        header('location: index.php?page=book');
        exit();    
    }
    
    public function updateBook($id, $id_theloai, $id_tacgia, $id_nxb, $ten_sach, $hinh, $gia, $giam, $mo_ta, $nam_xb, $so_luong_ban) {
        $result = $this->bookModel->updateBook($id, $id_theloai, $id_tacgia, $id_nxb, $ten_sach, $hinh, $gia, $giam, $mo_ta, $nam_xb, $so_luong_ban);
        
        if ($result) {
            return true; 
        }
        return false;
    }





    public function deleteBook($id) {
        $result = $this->bookModel->deleteBook($id);
        if ($result) {
            header("Location: index.php?page=book");
            exit();}
        
    }

    public function getBookById($id) {
        return $this->bookModel->getBookById($id);
    }
}  
    


?>
