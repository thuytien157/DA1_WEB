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
        if (!$categories) {
            $categories = []; 
        }
        require_once "Views/category.php";
    }
       // Xử lý thêm tác giả
       public function addCategory($ten_tacgia) {
        $result = $this->categoryModel->addCategory($ten_tacgia);
        
    }
    // Xử lý cập nhật tác giả
    public function updateCategory($id, $ten_tacgia) {
        $result = $this->categoryModel->updateCategory($id, $ten_tacgia);
        
    }

    // Xử lý xóa tác giả
    public function deleteCategory($id) {
        $result = $this->categoryModel->deleteCategory($id);
        
    }
    public function getCategoryById($id) {
        return $this->categoryModel->getCategoryById($id);
    }
}
?>
