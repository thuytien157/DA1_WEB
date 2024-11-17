<?php


require "connectModel.php";
class dangnhapModel {
    public $dangnhap;
    public function __construct(){

        $database=new connectModel();
        $this->dangnhap= $database->ketnoi();
    }

    public function login($user, $password) {
        $stmt = $this->dangnhap->prepare("SELECT username, vai_tro FROM user WHERE username = :user AND mat_khau = :password");
        $stmt->bindParam(':user', $user);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($userData) {
            return $userData; // Trả về dữ liệu người dùng
        }
        return false; // Trả về false nếu không tìm thấy
}

}