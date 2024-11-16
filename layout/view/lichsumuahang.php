<main class="wrap">
    <div class="dieuhuong">
        <a href="taikhoan.html" >Tài khoản</a> /
        <a href="lichsumuahang.html" id="back">Lịch sử mua hàng</a>
    </div>

    <?php
        foreach ($dh as $key => $value) {
            echo '
            <div class="lichsumuahang">
              <div class="thongtinls">
                <img src="public/img/IMG_DA1/san pham/'.$value['hinh'].'" class="img-thumbnail" alt="...">
                <div>'.$value['ten_sach'].'</div>
                <div>SL:0'.$value['so_luong'].'</div>
                <div class="gials">'.$value['gia'].'đ</div>
            </div>

            <div class="trangthai">
                <div class="trangthaivatien">
                    <h5 class="payment">'.$value['tt_donhang'].'</h5>
                    <div class="dathanhtoan">'.$value['gia'] * $value['so_luong'].'.000đ</div>
                </div>';

                if($value['tt_donhang'] == "Hoàn thành"){
                    echo '<div class="thoigiangiaohang">Sản phẩm đã giao vào ngày: <strong>'.$value['ngay_giao_hang'].'</strong></div>';
                }else{
                    echo '<div class="thoigiangiaohang">Sản phẩm dự kiến sẽ giao vào ngày: <br><strong>'.$value['ngay_giao_hang'].'</strong></div>';
                };
                
                echo '<button class="xemchitiet">
                    <a href="index.php?act=chitietlichsu&id='.$value['id_donhang'].'" class="text-decoration-none text-white">Xem chi tiết</a>
                </button>';

                if($value['tt_donhang'] == 'Chờ xử lý'){
                    echo '  
                    <button class="xemchitiet" data-bs-toggle="modal" data-bs-target="#exampleModal'.$value['id_donhang'].'">
                        Hủy đơn hàng
                    </button>
                    
                    <div class="modal fade" id="exampleModal'.$value['id_donhang'].'" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5">Xác nhận hủy đơn hàng</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Bạn có chắc chắn muốn hủy đơn hàng này?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Không</button>
                                    <a href="index.php?act=lichsu&id='.$value['id_donhang'].'&action=huy" class="btn btn-danger">Hủy đơn hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
            echo '</div>
            </div>';
        }
    ?>
        
</main>
