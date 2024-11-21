<?php
require_once "model/OrderModel.php";

class OrderController
{
    private $orderModel;

    public function __construct()
    {
        $this->orderModel = new orderModel();
    }


    // Hiển thị danh sách tác giả
    public function listOrders()
    {
        $Orders = $this->orderModel->getAllOrders();

        // Kiểm tra nếu `$prders` bị null hoặc rỗng
        if (!$Orders) {
            $Orders = []; // Gán mảng rỗng để tránh lỗi trong View
        }

        // Gửi dữ liệu sang View
        require_once "Views/Order.php";
    }
    // Xử lý thêm tác giả
    public function updateOrderStatus() {
        if (isset($_POST['id']) && isset($_POST['tt_donhang'])) {
            $id = $_POST['id'];
            $tt_donhang = $_POST['tt_donhang'];
            
            $result = $this->orderModel->updateOrderStatus($id, $tt_donhang);
            
            if ($result) {
                header("Location: index.php?page=order");
            } else {
                echo "Lỗi khi cập nhật trạng thái đơn hàng.";
            }
        }
    }
    
}
