<?php
require_once "model/PublishingHouseModel.php";

class PublishingHouseController {
    private $publishinghouseModel;

    public function __construct() {
        $this->publishinghouseModel = new PublishingHouseModel(); 
    }

    // Hiển thị danh sách nhà xuất bản
    public function listPublishingHouses() {
        $publishinghouses = $this->publishinghouseModel->getAllPublishingHouses();
        if (!$publishinghouses) {
            $publishinghouses = []; 
        }
        require_once "Views/publishinghouse.php"; 
    }

    // Xử lý thêm nhà xuất bản
    public function addPublishingHouse($ten_nhaxuatban) {
        $result = $this->publishinghouseModel->addPublishingHouse($ten_nhaxuatban);
    
        if ($result) {
            $_SESSION['message'] = "Thêm nhà xuất bản thành công!";
            header("Location: index.php?page=publishinghouse");
        } else {
            $_SESSION['error_message'] = "Nhà xuất bản đã tồn tại!";
            header("Location: index.php?page=publishinghouse");
        }
        exit;
    }
    public function updatePublishingHouse($id, $ten_nhaxuatban) {
        $result = $this->publishinghouseModel->updatePublishingHouse($id, $ten_nhaxuatban);
          
              if ($result['success']) {
                  $_SESSION['message'] = $result['message'];
              } else {
                  $_SESSION['error_message'] = $result['message'];
              }
              header("Location: index.php?page=publishinghouse");
              exit;
          }
    // Xử lý xóa nhà xuất bản
    public function deletePublishingHouse($id) {
        $result = $this->publishinghouseModel->deletePublishingHouse($id); 
        if ($result === false) {
            echo "<script>
                    alert('Bạn không thể xoá nhà xuất bản này vì có chứa sách!');
                    window.location.href = 'index.php?page=publishinghouse';
                  </script>";
        }else{
            header('location: index.php?page=publishinghouse');
            exit();
        }
        
    }

    // Lấy thông tin nhà xuất bản theo ID
    public function getPublishingHouseById($id) {
        return $this->publishinghouseModel->getPublishingHouseById($id); 
    }
}
?>
