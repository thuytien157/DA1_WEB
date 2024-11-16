<?php
class DonHangModel
{
    public $donhang;

    public function dsdh()
    {
        include_once 'models/connectmodel.php';
        $dulieu = new ConnectModel();
        $sql = 'SELECT *
FROM DonHang
INNER JOIN ChiTietDonHang
ON DonHang.MaDonHang = ChiTietDonHang.MaDonHang;
';
        $this->donhang = $dulieu->selectall($sql);
    }
}
