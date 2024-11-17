<?php
class ConnectModel
{
    public $servername = "localhost:4306";
    public $username = "root";
    public $password = "";
    public $conn;

    public function ketnoi()
    {
        try {
            $this->conn = new PDO("mysql:host=" . $this->servername . ";port=3306;dbname=da1;charset=utf8", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo 'kết nối thành công';
            return $this->conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function selectall($sql)
    {
        $this->ketnoi();
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $kq = $stmt->fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC : chuyển dl mãng lk
        $this->conn = null; // đóng kết nối database
        return $kq; // biến này chứa mãng các dòng dữ liệu trả về.
    }

    public function selectone($sql,$id)
    {
        $this->ketnoi();
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        $kq = $stmt->fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC : chuyển dl mãng lk
        $this->conn = null; // đóng kết nối database
        return $kq; // biến này chứa mãng các dòng dữ liệu trả về.
    }

    // dùng cho thêm sửa xoá
    public function modify($sql, $params = null) {
        include_once 'models/connectmodel.php';
        $connect = new ConnectModel();
        $conn = $connect->ketnoi();
        $stmt = $conn->prepare($sql);
        
        // Bind parameters nếu có
        if (is_array($params)) {
            foreach ($params as $key => $value) {
                $stmt->bindParam($key, $value);
            }
        }
    
        $stmt->execute($params);  
    }
    
    
    
}
