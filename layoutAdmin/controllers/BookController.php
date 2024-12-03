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
        $status = isset($_GET['status']) ? $_GET['status'] : '';
        if($status && $status == 1){
            $books = $this->bookModel->getHiddenBook();
        }else{
            $books = $this->bookModel->getAllBooks();
        }
        // header('location: index.php?page=book');
        // exit();
        $tg = $this->authorModel->getAllAuthors(); 
        $tl = $this->categoryModel->getAllCategory(); 
        $nxb = $this->publishinghouseModel->getAllPublishingHouses(); 
        require_once "Views/book.php";
    }

    public function addBooks($id_theloai, $id_tacgia, $id_nxb, $ten_sach, $hinh, $gia, $giam, $mo_ta, $nam_xb, $so_luong_ban) {
        $id_sach = $this->bookModel->addBooks($id_theloai, $id_tacgia, $id_nxb, $ten_sach, $hinh, $gia, $giam, $mo_ta, $nam_xb, $so_luong_ban);
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


    public function getBookById($id) {
        return $this->bookModel->getBookById($id);
    }

    public function hiddenBook($id) {
        return $this->bookModel->hiddenBook($id);
    }
    public function showBook($id) {
        return $this->bookModel->showBook($id);
    }
}  

?>
