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
    public function addAuthor($ten_tacgia) {
        $result = $this->authorModel->addAuthor($ten_tacgia);
    
        if ($result) {
            $_SESSION['message'] = "Thêm tác giả thành công!";
            header("Location: index.php?page=author");
        } else {
            $_SESSION['error_message'] = "Tác giả đã tồn tại!";
            header("Location: index.php?page=author");
        }
        exit;
    }
    
    

    public function updateAuthor($id, $ten_tacgia) {
  $result = $this->authorModel->updateAuthor($id, $ten_tacgia);
    
        if ($result['success']) {
            $_SESSION['message'] = $result['message'];
        } else {
            $_SESSION['error_message'] = $result['message'];
        }
        header("Location: index.php?page=author");
        exit;
    }
    

    // Xử lý xóa tác giả
    public function deleteAuthor($id) {
        $result = $this->authorModel->deleteAuthor($id);
        if ($result === false) {
            echo "<script>
                    alert('Bạn không thể xoá tác giả này vì có chứa sách!');
                    window.location.href = 'index.php?page=author';
                  </script>";
        }else{
            header('location: index.php?page=author');
            exit();
        }

    }
    
    public function getAuthorById($id) {
        return $this->authorModel->getAuthorById($id);
    }
    
    
}
?>
