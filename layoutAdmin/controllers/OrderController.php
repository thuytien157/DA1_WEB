<?php
require_once "model/AuthorModel.php";

class AuthorController {
    private $authorModel;

    public function __construct() {
        $this->authorModel = new AuthorModel();
    }
    

    // Hiển thị danh sách tác giả
    public function listAuthors() {
        $authors = $this->authorModel->getAllAuthors();

        // Kiểm tra nếu `$authors` bị null hoặc rỗng
        if (!$authors) {
            $authors = []; // Gán mảng rỗng để tránh lỗi trong View
        }

        // Gửi dữ liệu sang View
        require_once "Views/author.php";
    }
       // Xử lý thêm tác giả
       public function addAuthor($ten_tacgia) {
        $result = $this->authorModel->addAuthor($ten_tacgia);
        if ($result) {
            header("Location: index.php?page=author"); // Quay lại trang danh sách
        } else {
            echo "Lỗi khi thêm tác giả.";
        }
    }

    // Xử lý cập nhật tác giả
    public function updateAuthor($id, $ten_tacgia) {
        $result = $this->authorModel->updateAuthor($id, $ten_tacgia);
        if ($result) {
            header("Location: index.php?page=author");
        } else {
            echo "Lỗi khi cập nhật tác giả.";
        }
    }

    // Xử lý xóa tác giả
    public function deleteAuthor($id) {
        $result = $this->authorModel->deleteAuthor($id);
        if ($result) {
            header("Location: index.php?page=author");
        } else {
            echo "Lỗi khi xóa tác giả.";
        }
    }
    public function getAuthorById($id) {
        return $this->authorModel->getAuthorById($id);
    }
    
    
}
?>
