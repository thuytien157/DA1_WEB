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
    public function xemchitiet($id){
            $ctdh = $this->orderModel->ctdh($id);

            // mảng này để nhóm dữ liệu do 1 dh có nhiều sp nên có chung thông tin đh
            $nhomdulieu = [];


            // duyệt ctdh để lấy tt chi tiết
            foreach ($ctdh as $item) {
                $donhang_id = $item['donhang_id'];
                if (!isset($nhomdulieu[$donhang_id])) {
                    $nhomdulieu[$donhang_id] = [
                        'ngay_giao_hang' => $item['ngay_giao_hang'],
                        'dia_chi' => $item['dia_chi'],
                        'tt_donhang' => $item['tt_donhang'],
                        'tt_thanhtoan' => $item['tt_thanhtoan'],
                        'ghi_chu' => $item['ghi_chu'],
                        'tong_tien' => 0,
                        'san_pham' => []
                    ];
                }
                $nhomdulieu[$donhang_id]['san_pham'][] = [
                    'ten_sach' => $item['ten_sach'],
                    'so_luong' => $item['so_luong'],
                    'gia' => $item['gia']
                ];
                $nhomdulieu[$donhang_id]['tong_tien'] += $item['so_luong'] * $item['gia'];
            }
            // echo '<pre>';
            // var_dump($nhomdulieu);
            // echo '</pre>';
            include_once 'Views/details.php';
        
    }
   
    
}
