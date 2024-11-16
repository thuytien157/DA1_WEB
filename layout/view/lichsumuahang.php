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
                <div class="gials">'.$value['gia'].'</div>
            </div>

            <div class="trangthai">
                <div class="trangthaivatien">
                    <h5 class="payment">ĐÃ THANH TOÁN: </h5>
                    <div class="dathanhtoan">'.$value['gia'] * $value['so_luong'].'</div>
                </div>
                <div class="thoigiangiaohang">Sản phẩm đã giao vào ngày: '.$value['ngay_giao_hang'].'</div>
                <button class="xemchitiet"><a href="index.php?act=chitietlichsu&id='.$value['id'].'">Xem chi tiết</a></button>
            </div>
            </div>
            ';
        }
    
    
    
    ?>
        
        <!-- <div class="thongtinls">
            <img src="public/img/IMG_DA1/san pham/anh-hung-tro-ve.jpg" class="img-thumbnail" alt="...">
            <div>Chuyển sinh thành con ngoài giá thú của gia đình danh giá</div>
            <div>SL:01</div>
            <div class="gials">60.000đ</div>
        </div>

        <div class="trangthai">
            <div class="trangthaivatien">
                <h5 class="payment">ĐÃ THANH TOÁN: </h5>
                <div class="dathanhtoan">60.000đ</div>
            </div>
            <div class="thoigiangiaohang">Sản phẩm đã giao vào ngày: 15-10-2024</div>
            <button class="xemchitiet">Xem chi tiết</button>
        </div> -->

        
    </main>