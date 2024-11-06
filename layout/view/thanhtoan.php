<main class="wrap">
    <div class="dieuhuong">
        <a href="giohang.html" >Giỏ hàng</a> /
        <a href="thanhtoan.html" id="back">Thanh toán</a>
    </div>

    <div class="thanhtoan">
        <div class="thongtinthanhtoan">
            <h5 class="textthanhtoan">Thông tin thanh toán</h5>
            <div class="formthanhtoan">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Họ và tên</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" required>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Địa chỉ</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" required>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Số điện thoại</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" required>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label fw-bold">Ghi chú</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            </div>
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
                  <tr>
                    <td colspan="">Lén nhặt chuyện đời </td>
                    <td colspan="2">x1</td>
                    <td>42.000đ</td>
                  </tr>
                  <tr>
                    <td colspan="">Sakamoto Days - Tập 3 - Mashimo</td>
                    <td colspan="2">x1</td>
                    <td>410.000đ</td>
                  </tr>
                  <tr>
                    <th colspan="3">Tổng</th>
                    <td>452.000đ</td>
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
              <button id="btn-thanhtoan">Thanh toán</button>
        </div>
    </div>
    <!-- end div thanhtoan -->

</main>