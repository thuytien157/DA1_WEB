<?php
class doimkController {
    public function __construct() {
        // Check if user is logged in
        if (isset($_SESSION['user'])) {
            // Process POST request if present
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $this->doimk();
            } else {
                // Display password change form
                include "view/doimk.php";
            }
        } else {
            // Redirect to login page if user is not logged in
            $_SESSION['thongbao'] = "Bạn phải đăng nhập để đổi mật khẩu!";
            header("Location: index.php?act=login");
            exit();
        }
    }

    private function doimk() {
        // Get form data
        $currentPassword = $_POST['currentPassword'] ?? '';
        $newPassword = $_POST['newPassword'] ?? '';
        $confirmPassword = $_POST['confirmNewPassword'] ?? '';

        // Validate current password
        if (empty($currentPassword)) {
            $_SESSION['thongbao'] = 'Mật khẩu hiện tại không được để trống!';
            header("Location: index.php?act=doimk");
            exit();
        }

        // Validate new password and confirmation
        if ($newPassword !== $confirmPassword) {
            $_SESSION['thongbao'] = 'Mật khẩu mới và xác nhận mật khẩu không khớp!';
            header("Location: index.php?act=doimk");
            exit();
        }

        // Check password strength (at least 8 chars, one uppercase, one digit, and special char)
        if (!preg_match('/^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/', $newPassword)) {
            $_SESSION['thongbao'] = 'Mật khẩu mới không hợp lệ! (Cần có chữ hoa, số và ký tự đặc biệt)';
            header("Location: index.php?act=doimk");
            exit();
        }

        // Call the model to change password
        include "models/doimkModel.php";
        $doimkModel = new doimkModel();
        $result = $doimkModel->changePassword($_SESSION['user']['id'], $currentPassword, $newPassword);

        if ($result) {
            $_SESSION['thongbao'] = 'Đổi mật khẩu thành công!';
        } else {
            $_SESSION['thongbao'] = 'Mật khẩu hiện tại không đúng!';
        }

        // Redirect to password change page
        header("Location: index.php?act=doimk");
        exit();
    }
}
?>
