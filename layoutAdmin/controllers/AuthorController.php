<?php
require_once "model/AuthorModel.php";

class AuthorController {
    private $authorModel;

    public function __construct() {
        $this->authorModel = new AuthorModel();
    }
    

    // Hiển thị danh sách tác giả
    public function listAuthors() {
        $authors = $this->authorModel->getAllAuthors(); //lay danh sach author tu lop authormodel va gan cho authors
        if (!$authors) {
            $authors = [];
        }
        // gui dl cho view de duyet mang va hien thi
        require_once "Views/author.php";
    }
       // Xử lý thêm tác giả
       public function addAuthor($ten_tacgia) {
        $result = $this->authorModel->addAuthor($ten_tacgia);
    
    }

    // Xử lý cập nhật tác giả
    public function updateAuthor($id, $ten_tacgia) {
        $result = $this->authorModel->updateAuthor($id, $ten_tacgia);
       
    }

    // Xử lý xóa tác giả
    public function deleteAuthor($id) {
        $result = $this->authorModel->deleteAuthor($id);
    
    }
    public function getAuthorById($id) {
        return $this->authorModel->getAuthorById($id);
    }
    
    
}
?>
