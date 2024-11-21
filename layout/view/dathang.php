<main class="wrap">
    <div class="dieuhuong">
        <a href="giohang.html" >Giỏ hàng</a> /
        <a href="thanhtoan.html" id="back">Thanh toán</a>
    </div>

    <div class="thanhtoan">
        <div class="thongtinthanhtoan">
            <h5 class="textthanhtoan">Thông tin thanh toán</h5>
            <div class="formthanhtoan">
            <form action="index.php?act=tienhanhdathang&action=dathang" method="post">
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Họ và tên</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="ho_ten" required value="<?=$_SESSION['user']['ho_ten'];?>">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Địa chỉ</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="dia_chi" required>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Số điện thoại</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="sdt" required value="<?=$_SESSION['user']['sdt'];?>">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label fw-bold">Ghi chú</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ghi_chu"></textarea>
              </div>
            </div>
            <select name="pt_thanhtoan" class="form-select w-75">
                <option value="Chuyển khoản ngân hàng">Chuyển khoản ngân hàng</option>
                <option value="Thanh toán tiền mặt">Thanh toán tiền mặt</option>
                <option value="Thanh toán Momo">Thanh toán Momo</option>
                <option value="Thanh toán VNPAY">Thanh toán VNPAY</option>
            </select>
            <button type="submit" class="mt-2 xemchitiet pb-2 pt-2 ps-3 pe-3 w-25 fs-6 fw-medium rounded" name="dathang">Đặt hàng</button>

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
// echo '<pre>';
// var_dump($_SESSION['cart']); 
// echo '</pre>';



            $tongTien = 0; 
            foreach ($_SESSION['cart'] as $key => $value) {
                $tamTinh = $value['gia'] * $value['sl'];
                $tongTien += $tamTinh;
                echo '
                <tr>
                    <td>'.$value['ten'].'</td>
                    <td colspan="2">x'.$value['sl'].'</td>
                    <td>'.$tamTinh.'.000đ</td>
                </tr>
                
                ';
            }
        ?>
        <tr>
            <th colspan="3">Tổng</th>
            <td><?=$tongTien; ?>.000đ</td>
        </tr>
        </tbody>
    </table>
    <!-- <a href="index.php?act=dathang" id="btn-thanhtoan" class="xemchitiet text-decoration-none text-white">Thanh toán</a> -->
</div>




    </div>
    <!-- end div thanhtoan -->

</main>
<script src="./assets/js/sldonhang.js"></script>