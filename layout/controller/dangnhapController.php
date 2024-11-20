<?php
class dangnhapController {
    public $dangnhap;

    public function __construct() {
        require "models/dangnhapModel.php";
        $this->dangnhap = new dangnhapModel();

        // Hiển thị trang đăng nhập khi GET request
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include_once "view/dangnhap.php";
        }

        // Xử lý đăng nhập khi POST request
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = $_POST['user'] ?? '';  // Lấy tên đăng nhập từ POST
            $password = $_POST['password'] ?? '';  // Lấy mật khẩu từ POST
            $this->handleLogin($user, $password);
        }
    }

    private function handleLogin($user, $password) {
        // Kiểm tra thông tin đăng nhập
        $userData = $this->dangnhap->login($user, $password);

        if ($userData) {
            // Đăng nhập thành công, lưu thông tin vào session
            session_start();
            $_SESSION['user'] = [
                'id' => $userData['id'],
                'username' => $userData['username'],
                'ho_ten' => $userData['ho_ten'],
                'sdt' => $userData['sdt'],
                'email' => $userData['email'],
            ];

            $_SESSION['vai_tro'] = $userData['vai_tro'];
            $_SESSION['id'] = $userData['id'];

            // Chuyển hướng theo vai trò người dùng
            if ($userData['vai_tro'] == 1) {
                // Chuyển đến giao diện admin
                header("Location: ../layoutAdmin/index.php");
            } else {
                // Chuyển đến giao diện người dùng
                header("Location: index.php");
            }
            exit;
        } else {
            // Đăng nhập thất bại
            $error = "Tên đăng nhập hoặc mật khẩu không đúng!";
            include "view/dangnhap.php"; // Hiển thị lại trang đăng nhập và thông báo lỗi
        }
    }
}

