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

    public function addBooks($id_theloai, $id_tacgia, $id_nxb, $ten_sach, $hinh, $gia, $giam, $mo_ta, $nam_xb, $so_luong_ban) {
        $result = $this->bookModel->addBooks($id_theloai, $id_tacgia, $id_nxb, $ten_sach, $hinh, $gia, $giam, $mo_ta, $nam_xb, $so_luong_ban);
        return $result;
        require_once "Views/book.php";
    }




    public function deleteBook($id) {
        $result = $this->bookModel->deleteBook($id);
        
    }
}  
    


?>
