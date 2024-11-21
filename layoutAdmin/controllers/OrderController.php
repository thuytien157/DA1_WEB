<?php
require_once "model/OrderModel.php";

class OrderController
{
    private $OrderModel;

    public function __construct()
    {
        $this->OrderModel = new OrderModel();
    }


    // Hiển thị danh sách tác giả
    public function listOrders()
    {
        $Orders = $this->OrderModel->getAllOrders();

        // Kiểm tra nếu `$prders` bị null hoặc rỗng
        if (!$Orders) {
            $Orders = []; // Gán mảng rỗng để tránh lỗi trong View
        }

        // Gửi dữ liệu sang View
        require_once "Views/Order.php";
    }
    // Xử lý thêm tác giả
    public function addOrder($id_khachhang,$ngay_giao_hang,$tt_thanhtoan,$tt_donhang,$dia_chi,$ghi_chu)
    {
        $result = $this->OrderModel->addOrder($id_khachhang,$ngay_giao_hang,$tt_thanhtoan,$tt_donhang,$dia_chi,$ghi_chu);
        if ($result) {
            header("Location: index.php?page=order"); // Quay lại trang danh sách
        } else {
            echo "Lỗi khi thêm đơn hàng.";
        }
    }
      // Xử lý xóa tác giả
      public function deleteOrder($id) {
        $result = $this->OrderModel->deleteOrder($id);
        if ($result) {
            header("Location: index.php?page=order");
        } else {
            echo "Lỗi khi xóa tác giả.";
        }
    }
     // Xử lý cập nhật tác giả
     public function updateOrder($id,$id_khachhang,$ngay_giao_hang,$tt_thanhtoan,$tt_donhang,$dia_chi,$ghi_chu) {
        $result = $this->OrderModel->updateOrder($id,$id_khachhang,$ngay_giao_hang,$tt_thanhtoan,$tt_donhang,$dia_chi,$ghi_chu);
        if ($result) {
            header("Location: index.php?page=order");
        } else {
            echo "Lỗi khi cập nhật đơn hàng.";
        }
    }
    public function getOrderById($id) {
        return $this->OrderModel->getOrderById($id);
    }
}
