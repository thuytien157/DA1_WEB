<?php
class dangkyController {
    public function __construct() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->handleRegistration();
        } else {
            include_once "view/dangky.php";
        }
    }

    public function handleRegistration() {
        $hoTen = isset($_POST['ho_ten']) ? trim($_POST['ho_ten']) : '';
        $sdt = isset($_POST['sdt']) ? trim($_POST['sdt']) : '';
        $username = isset($_POST['username']) ? trim($_POST['username']) : '';
        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
        $matKhau = isset($_POST['mat_khau']) ? $_POST['mat_khau'] : '';
        $reMatKhau = isset($_POST['re_mat_khau']) ? $_POST['re_mat_khau'] : '';

        // Kiểm tra lỗi
        $error = $this->validateForm($hoTen, $sdt, $username, $email, $matKhau, $reMatKhau);
        if (!empty($error)) {
            include_once "view/dangky.php";
            return;
        }

        // Lưu thông tin người dùng

        $mkmahoa = password_hash($matKhau, PASSWORD_BCRYPT);

        require_once "models/dangkyModel.php";
        $dangkyModel = new dangkyModel();
        $result = $dangkyModel->registerUser($hoTen, $sdt, $username, $email, $mkmahoa);

        if ($result) {
            $_SESSION['thongbao']="Đăng ký thành công ";
            header("Location: index.php?act=login");
        } else {

            $error = "Đăng ký thất bại. Vui lòng thử lại!";
            include_once "view/dangky.php";
        }
    }

    public function validateForm($hoTen, $sdt, $username, $email, $matKhau, $reMatKhau) {
        if (empty($hoTen) || empty($sdt) || empty($username) || empty($email) || empty($matKhau) || empty($reMatKhau)) {
            return "Vui lòng nhập đầy đủ thông tin.";
        }
        require_once "models/dangkyModel.php";
        $dangkyModel = new dangkyModel(); // Khởi tạo đối tượng dangkyModel
        if ($dangkyModel->isUsernameExists($username)) {
            return "Tên đăng nhập đã tồn tại. Vui lòng chọn tên khác.";
        }
        if (!preg_match('/^(?!.*[_.]{2})[a-zA-Z0-9](?:[a-zA-Z0-9._]{4,18})[a-zA-Z0-9]$/', $username)) {
            return "Tên đăng nhập không hợp lệ. Vui lòng sử dụng 6-20 ký tự bao gồm chữ, số, dấu chấm hoặc gạch dưới.";
        }

        if ($dangkyModel->isEmailExists($email)) {
            return "Email đã được sử dụng. Vui lòng chọn email khác.";
        }
        if ($dangkyModel->isPhoneExists($sdt)) {
            return "Số điện thoại đã được sử dụng. Vui lòng chọn Số điện thoại khác.";
        }

        if (!preg_match('/^[0-9]{10}$/', $sdt)) {
            return "Số điện thoại phải gồm 10 chữ số.";
        }

        // FILTER_VALIDATE_EMAIL là một hằng số trong PHP được sử dụng với hàm filter_var() để kiểm tra xem một chuỗi có phải là địa chỉ email hợp lệ hay không.
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "Email không hợp lệ.";
        }

        if ($matKhau !== $reMatKhau) {
            return "Mật khẩu và xác nhận mật khẩu không khớp.";
        }

        if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $matKhau)) {
            return "Mật khẩu phải có ít nhất 8 ký tự, bao gồm chữ hoa, chữ thường, số và ký tự đặc biệt.";
        }

        return '';
    }
}
