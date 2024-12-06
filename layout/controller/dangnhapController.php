<?php
class dangnhapController {
    public $dangnhap;

    public function __construct() {
        require "models/dangnhapModel.php";
        $this->dangnhap = new dangnhapModel();

        // Hiển thị trang đăng nhập khi GET request
       
        include_once "view/dangnhap.php";


        // Xử lý đăng nhập khi POST request
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['dn'])) {
            $user = $_POST['user'] ?? '';  // Lấy tên đăng nhập từ POST
            $password = $_POST['password'] ?? '';  // Lấy mật khẩu từ POST
            $this->handleLogin($user, $password);
        }
    }

    private function handleLogin($user, $password) {
        // Lấy thông tin người dùng dựa trên tên đăng nhập
        $userData = $this->dangnhap->login($user);

        //  var_dump(password_verify($password,$userData['mat_khau']));
        //  var_dump(password_hash("Thuytien965002@", PASSWORD_BCRYPT));
        //  var_dump($userData['mat_khau']);
        $password = $_POST['password'];
        if ($userData && password_verify($password, $userData['mat_khau'])) {
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
            if ($userData['vai_tro'] == 1 || $userData['vai_tro'] == 2)  {
                $_SESSION['thongbao']="Đăng nhập thành công ";
                header("Location: ../layoutAdmin/index.php");
            } else {
                $_SESSION['thongbao']="Đăng nhập thành công ";
                header("Location: index.php");
            }
            exit;
        } else {
            // Đăng nhập thất bại
            $error = "Tên đăng nhập hoặc mật khẩu không đúng!";
            include "view/dangnhap.php";
            echo password_verify($password,$userData['mat_khau']);
        }
    }

}

