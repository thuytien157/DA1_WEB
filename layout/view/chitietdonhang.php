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
          </tr>';
          if($value['tt_donhang'] == "Hoàn thành"){
            echo '
            <tr>
              <th scope="row">Ngày giao hàng</th>
              <td >'.$value['ngay_giao_hang'].'</td>
            </tr>
            ';
          }else{
              echo '
                <tr>
                <th scope="row">Ngày giao hàng dự kiến</th>
                <td >'.$value['ngay_giao_hang'].'</td>
              </tr>
              ';
          };
          
          echo '
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
      </table>
</div>
<button id="back_ls"><a style="text-decoration: none; color: white;" href="index.php?act=lichsu">Quay lại</a></button>
</div>



</main>