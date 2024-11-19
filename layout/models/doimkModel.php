<?php
class doimkModel {
    // Hàm thay đổi mật khẩu
    public function changePassword($userId, $currentPassword, $newPassword) {
        include "models/connectmodel.php";  // Kết nối với cơ sở dữ liệu
        $connect = new ConnectModel();  // Khởi tạo đối tượng kết nối

        $sql = "SELECT mat_khau FROM user WHERE id = :id";  // Truy vấn lấy mật khẩu của người dùng từ cơ sở dữ liệu
        $params = [':id' => $userId];  // Tham số truy vấn, sử dụng id người dùng
        $result = $connect->selectonepass($sql, $params);  // Thực thi truy vấn và lấy kết quả

        // Nếu tìm thấy mật khẩu và mật khẩu hiện tại khớp với mật khẩu trong cơ sở dữ liệu
        if ($result && $result['mat_khau'] === $currentPassword) {
            $updateSql = "UPDATE user SET mat_khau = :newPassword WHERE id = :id";  // Truy vấn cập nhật mật khẩu
            $updateParams = [
                ':newPassword' => $newPassword,
                ':id' => $userId  // ID người dùng cần cập nhật
            ];
            $connect->modify($updateSql, $updateParams);  // Thực thi truy vấn cập nhật mật khẩu
            return true;  // Trả về true khi mật khẩu đã được thay đổi thành công
        }
        return false;  // Nếu mật khẩu hiện tại không đúng, trả về false
    }
}


?>
