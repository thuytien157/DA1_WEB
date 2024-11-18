<?php
class dangnhapController {
    public $dangnhap;

    public function __construct($user, $password) {
        require "models/dangnhapModel.php";
        $this->dangnhap = new dangnhapModel();

        // Hiển thị trang đăng nhập
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include_once "view/dangnhap.php"; 
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->handleLogin($user, $password);
        }
    }

    private function handleLogin($user, $password) {
        // Kiểm tra thông tin đăng nhập
        $userData = $this->dangnhap->login($user, $password);

        if ($userData) {
            session_start();
            $_SESSION['user'] = $userData['username'];
            $_SESSION['vai_tro'] = $userData['vai_tro'];
            $_SESSION['id'] = $userData['id'];

            if ($userData['vai_tro'] == 1) {
                // Chuyển đến giao diện admin
                header("Location: ../layoutAdmin/controllers/index.php");
            } else {
                // Chuyển đến giao diện người dùng
                header("Location: index.php");
            }
            exit;
        } else {
            // Đăng nhập thất bại
            $error = "Tên đăng nhập hoặc mật khẩu không đúng!";
            require "view/dangnhap.php" ; // Hiển thị lại trang đăng nhập
        }
    }
}
