<?php
class doimkModel {
    public function changePassword($userId, $currentPassword, $newPassword) {
        include "models/connectmodel.php";
        $connect = new ConnectModel();

        // Check if current password is correct
        $sql = "SELECT mat_khau FROM user WHERE id = :id";
        $params = [':id' => $userId];
        $result = $connect->selectone($sql, $params);

        if ($result && password_verify($currentPassword, $result[0]['mat_khau'])) {
            // Hash new password
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $updateSql = "UPDATE user SET mat_khau = :newPassword WHERE id = :id";
            $updateParams = [
                ':newPassword' => $hashedPassword,
                ':id' => $userId
            ];
            $connect->modify($updateSql, $updateParams);
            return true;
        }
        return false; // Incorrect current password
    }
}
?>
