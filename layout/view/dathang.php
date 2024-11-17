<main class="wrap">
    <div class="dieuhuong">
        <a href="giohang.html" >Giỏ hàng</a> /
        <a href="thanhtoan.html" id="back">Thanh toán</a>
    </div>

    <div class="thanhtoan">
        <div class="thongtinthanhtoan">
            <h5 class="textthanhtoan">Thông tin thanh toán</h5>
            <div class="formthanhtoan">
                <form action="index.php?act=dathang" method="post">
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Họ và tên</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="ho_ten" required>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Địa chỉ</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="dia_chi" required>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Số điện thoại</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="sdt" required>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label fw-bold">Ghi chú</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ghi_chu"></textarea>
              </div>
            </div>
            <button type="submit" class="btn btn-primary xemchitiet">Đặt hàng</button>

            </form>
            <!-- end formthanhtoan -->
        </div>
        <!-- end thongtinthanhtoan -->

        <div class="donhang">
    <h5 class="textdonhang">Đơn hàng của bạn</h5>
    <table class="table bangdh">
        <thead>
        <tr>
            <th colspan="3">Sản phẩm</th>
            <th>Tạm tính</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $tongTien = 0; 
            foreach ($_SESSION['cart'] as $key => $value) {
                $tamTinh = $value['gia'] * $value['sl'];
                $tongTien += $tamTinh;
                echo '
                <tr>
                    <td>'.$value['ten'].'</td>
                    <td colspan="2">x'.$value['sl'].'</td>
                    <td>'.$tamTinh.'.000đ</td>
                </tr>';
            }
        ?>
        <tr>
            <th colspan="3">Tổng</th>
            <td><?php echo $tongTien; ?>.000đ</td>
        </tr>
        </tbody>
    </table>
    <div class="phuongthucthanhtoan">
        <h6 id="pttt">Phương thức thanh toán</h6>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label style="font-size: 14px;" class="form-check-label" for="flexRadioDefault1">
                Chuyển khoản ngân hàng
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label style="font-size: 14px;" class="form-check-label" for="flexRadioDefault2">
                Thanh toán tiền mặt
            </label>
        </div>
    </div>
    <!-- <a href="index.php?act=dathang" id="btn-thanhtoan" class="xemchitiet text-decoration-none text-white">Thanh toán</a> -->
</div>




    </div>
    <!-- end div thanhtoan -->

</main>