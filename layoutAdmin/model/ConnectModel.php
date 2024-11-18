<?php
class ConnectModel {
    private $host = "localhost:4306";
    private $dbname = "da1";
    private $username = "root";
    private $password = "";
    private $conn;

    public function connect() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            die("Kết nối thất bại: " . $e->getMessage());
        }
    }
}
?>
