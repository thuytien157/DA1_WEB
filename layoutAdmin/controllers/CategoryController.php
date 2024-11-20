<?php
require_once "model/CategoryModel.php";

class CategoryController {
    private $categoryModel;

    public function __construct() {
        $this->categoryModel = new CategoryModel();
    }
    

    // Hiển thị danh sách tác giả
    public function listCategorys() {
        $categories = $this->categoryModel->getAllCategory();

        // Kiểm tra nếu `$categorys` bị null hoặc rỗng
        if (!$categories) {
            $categories = []; // Gán mảng rỗng để tránh lỗi trong View
        }

        // Gửi dữ liệu sang View
        require_once "Views/category.php";
    }
       // Xử lý thêm tác giả
       public function addCategory($ten_tacgia) {
        $result = $this->categoryModel->addCategory($ten_tacgia);
        if ($result) {
            header("Location: index.php?page=category"); // Quay lại trang danh sách
        } else {
            echo "Lỗi khi thêm tác giả.";
        }
    }

    // Xử lý cập nhật tác giả
    public function updateCategory($id, $ten_tacgia) {
        $result = $this->categoryModel->updateCategory($id, $ten_tacgia);
        if ($result) {
            header("Location: index.php?page=category");
        } else {
            echo "Lỗi khi cập nhật tác giả.";
        }
    }

    // Xử lý xóa tác giả
    public function deleteCategory($id) {
        $result = $this->categoryModel->deleteCategory($id);
        if ($result) {
            header("Location: index.php?page=category");
        } else {
            echo "Lỗi khi xóa tác giả.";
        }
    }
    public function getCategoryById($id) {
        return $this->categoryModel->getCategoryById($id);
    }
    
    
}
?>
