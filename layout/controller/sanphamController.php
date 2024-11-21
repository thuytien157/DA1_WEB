<?php
class sanphamController {
    public function __construct($idtl = null, $idtg = null, $idnxb = null) {
        // Khởi tạo model
        include_once 'models/sanphammodel.php';
        $sanphammodel = new sanphamModel();

        // Lấy danh sách thể loại, tác giả, và NXB
        $sanphammodel->dstl();
        $sanphammodel->dstacgia();
        $sanphammodel->dsnxb();
        
        // Kiểm tra nếu có tham số thể loại, tác giả, hoặc NXB
        if (empty($idtl) && empty($idtg) && empty($idnxb)) {
            // Nếu không có tham số nào, lấy tất cả sản phẩm
            $sanphammodel->dssp();
            $kq = $sanphammodel->sp; 
        } else {
            if ($idtg) {
                // Lọc theo tác giả
                $kq = $sanphammodel->spTheoTacGia($idtg);
            } elseif ($idnxb) {
                // Lọc theo nhà xuất bản
                $kq = $sanphammodel->spTheoNXB($idnxb);
            } elseif ($idtl) {
                // Lọc theo thể loại
                $kq = $sanphammodel->spTheoTheLoai($idtl);
            }
        }

        // Truyền dữ liệu đến view
        include_once 'view/sanpham.php';
    }
}
?>
