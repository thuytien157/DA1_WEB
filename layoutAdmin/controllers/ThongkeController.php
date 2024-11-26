<?php
class ThongkeController
{
    public $thongke;
    public function __construct()
    {
        $database = new connectModel();
        $this->thongke = $database->ketnoi();
    }

    public function thongkesach()
    {
        $stmt = $this->thongke->prepare("
            SELECT SUM(chi_tiet_don_hang.so_luong) AS tong_so_sach
            FROM chi_tiet_don_hang
            INNER JOIN don_hang ON don_hang.id = chi_tiet_don_hang.id_donhang
        ");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result['tong_so_sach'] ?? 0; // Trả về 0 nếu không có kết quả
    }
}



