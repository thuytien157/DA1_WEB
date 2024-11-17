<main class="wrap">
    <div class="dieuhuong">
        <a href="taikhoan.html" >Tài khoản</a> /
        <a href="lichsumuahang.html" id="back">Lịch sử mua hàng</a>
    </div>
        <?php
        if(isset($dh) && !empty($dh)) {
            foreach ($dh as $key => $value) {
                echo '
                <div class="lichsumuahang">
                <div class="thongtinls">
                    <img src="public/img/IMG_DA1/san pham/'.$value['hinh'].'" class="img-thumbnail" alt="...">
                    <div>'.$value['ten_sach'].'</div>
                    <div>SL: 0'.$value['so_luong'].'</div>
                    <div class="gials">'.$value['gia'].'đ</div>
                </div>

                <div class="trangthai">
                    <div class="trangthaivatien">
                        <h5 class="payment">'.$value['tt_donhang'].'</h5>
                        <div class="dathanhtoan">'.$value['gia'] * $value['so_luong'].'.000đ</div>
                    </div>';

                    if($value['tt_donhang'] == "Hoàn thành"){
                        echo '<div class="thoigiangiaohang">Sản phẩm đã giao vào ngày: <strong>'.$value['ngay_giao_hang'].'</strong></div>';
                    } else {
                        echo '<div class="thoigiangiaohang">Sản phẩm dự kiến sẽ giao vào ngày: <br><strong>'.$value['ngay_giao_hang'].'</strong></div>';
                    };

                    echo '<button class="xemchitiet">
                        <a href="index.php?act=lichsu&action=xemchitiet&id='.$value['id_donhang'].'" class="text-decoration-none text-white">Xem chi tiết</a>
                    </button>';

                    if($value['tt_donhang'] == 'Chờ xử lý'){
                        echo ' 
                        <button class="xemchitiet" data-bs-toggle="modal" data-bs-target="#exampleModal1'.$value['id_donhang'].'">
                            Thay đổi địa chỉ nhận hàng
                        </button>

                        <div class="modal fade" id="exampleModal1'.$value['id_donhang'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <form method="post" action="index.php?act=lichsu&action=doidiachi&id='.$value['id_donhang'].'">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Nhập địa chỉ nhận hàng mới của bạn ở đây</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <textarea name="dia_chi" class="form-control" id="message-text"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                <button type="submit" class="btn btn-danger">Cập nhật địa chỉ</button>
                            </div>
                            </div>
                        </div>                        
                        </form>

                        </div>


                        

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
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                        <a href="index.php?act=lichsu&action=huy&id='.$value['id_donhang'].'" class="btn btn-danger">Xác nhận hủy</a>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }

                    echo '</div>';
            }
        } else{
            echo "<p class='text-center fs-4 me-4 fw-bold mt-2'>Không có đơn hàng nào</p>";
        }
    ?>

        
</main>
