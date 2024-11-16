<?php
    class giohangController {
        public function __construct($action, $id, $ten, $gia, $sl, $hinh) {
            if ($action == 'thanhtoan') {
                include_once 'view/thanhtoan.php';
                } elseif ($action == 'themvaogiohang') {
                
                // khởi tạo session luôn luôn là 1 mảng
                if (!isset($_SESSION['cart'])) {
                    $_SESSION['cart'] = [];
                }

                // khi nút được nhấn
                if (isset($_POST['themvaogiohang'])) {
                    $id= $_GET['id'];
                    $ten = $_POST['ten'];
                    $gia = $_POST['gia'];
                    $sl = $_POST['sl'];
                    $hinh = $_POST['hinh'];
                    
                    // biến này để kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
                    $check = false;
    
                    foreach ($_SESSION['cart'] as $key => $value) {
                        if (is_array($value) && isset($value['id'], $value['ten'], $value['gia'], $value['sl'], $value['hinh'])) {

                            // nếu id thêm vào giống với id sp đã có trong session thì sl tăng lên
                            if ($value['id'] == $id) {
                                $_SESSION['cart'][$key]['sl'] += $sl;

                                // check == true sp đã được thêm vào giỏ hàng và tồn tại
                                $check = !$check;
                                break;
                            }
                        }
                    }

                    //check == false sp chưa được thêm vào giỏ hàng 
                    if (!$check) {
                        $_SESSION['cart'][] = [
                            'id' => $id,
                            'ten' => $ten,
                            'gia' => $gia,
                            'sl' => $sl,
                            'hinh' => $hinh
                        ];
                    }
                }

                    // sau khi thêm thì chuyển đến trang giỏ hàng
                    header('Location: ./index.php?act=cart');
                    exit;

                //xoá sản phẩm
                }elseif($action == 'xoa'){
                    foreach ($_SESSION['cart'] as $key => $value) {
                        if ($value['id'] == $id) {
                            unset($_SESSION['cart'][$key]);                        
                            break;
                        }
                    }

                    // view lại trang giỏ hàng cho người dùng thấy kq sau khi xoá
                    header('Location: ./index.php?act=cart');
                    exit;

            } else {
                include_once "view/giohang.php";
            }
        }
    }
    

?>