<main class="wrap">

<div class="dieuhuong">
    <a href="lichsumuahang.html" >Lịch sử mua hàng</a> /
    <a href="thanhtoan.html" id="back">Chi tiết đơn hàng</a>
</div>
<h5 id="textct">Chi tiết đơn hàng của bạn</h5>
<div class="ctdonhang">
    <table class="table ct">
      <?php
        foreach ($ctdh as $key => $value) {
          echo '
          <tbody>
          <tr>
            <th scope="row">Sản phẩm</th>
            <td>'.$value['ten_sach'].'</td>
          </tr>
          <tr>
            <th scope="row">Số lượng</th>
            <td>x'.$value['so_luong'].'</td>
          </tr>
          <tr>
            <th scope="row">TT thanh toán</th>
            <td >'.$value['tt_thanhtoan'].'</td>
          </tr>
          <tr>
            <th scope="row">TT đơn hàng</th>
            <td >'.$value['tt_donhang'].'</td>
          </tr>
          <tr>
            <th scope="row">Ngày giao</th>
            <td >'.$value['ngay_giao_hang'].'</td>
          </tr>
          <tr>
            <th scope="row">Địa chỉ</th>
            <td >'.$value['dia_chi'].'</td>
          </tr>
          <tr>
            <th scope="row">Ghi chú</th>
            <td>'.$value['ghi_chu'].'</td>
          </tr>
        </tbody>
          ';
        }
      
      
      ?>

        <!-- <tbody>
          <tr>
            <th scope="row">Sản phẩm</th>
            <td>Chuyển sinh thành con ngoài giá thú của gia đình danh giá</td>
          </tr>
          <tr>
            <th scope="row">Số lượng</th>
            <td>x1</td>
          </tr>
          <tr>
            <th scope="row">TT thanh toán</th>
            <td >Đã thanh toán</td>
          </tr>
          <tr>
            <th scope="row">TT đơn hàng</th>
            <td >Đã giao hàng</td>
          </tr>
          <tr>
            <th scope="row">Ngày giao</th>
            <td >12/10/2024</td>
          </tr>
          <tr>
            <th scope="row">Địa chỉ</th>
            <td >123 Đường Nguyễn Trãi, Phường Bến Thành, Quận 1, TP. Hồ Chí Minh</td>
          </tr>
          <tr>
            <th scope="row">Ghi chú</th>
            <td>Khách hàng không để lại ghi chú</td>
          </tr>
        </tbody> -->
      </table>
</div>
<button id="back_ls"><a style="text-decoration: none; color: white;" href="lichsumuahang.html">Quay lại</a></button>
</div>



</main>