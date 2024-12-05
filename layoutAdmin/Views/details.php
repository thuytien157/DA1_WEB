<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .bg-dark {
      background-color: #D98C52 !important;
    }

    .sidebar {
      background-color: #D98C52 !important;
    }

    .nav-link {
      color: #fff !important;
      font-weight: bold;
    }

    .nav-link:hover {
      background-color: #B77D42 !important;
    }

    .card-header {
      background-color: #F8F9FA;
      border-bottom: 2px solid #D98C52;
    }

    .card-header h6 {
      color: #D98C52 !important;
    }

    .table th,
    .table td {
      color: #333 !important;
      text-transform: uppercase;
      font-size: 14px;
      border-color: #D98C52;
    }

    .table thead {
      background-color: #F4F1ED;
      color: #D98C52;
    }

    .table-responsive {
      max-height: 500px;
      overflow-y: auto;
    }

    tr:hover {
      background-color: #f9e3d4;
    }

    .action-link {
      padding: 0 10px;
      font-weight: bold;
    }

    .action-link.edit {
      color: #F5CA0F !important;
    }

    .action-link.delete {
      color: #F5110F !important;
    }

    .order-details {
      background-color: #f8f9fa;
      margin-top: 15px;
      padding: 15px;
      border-radius: 8px;
      border: 1px solid #D98C52;
    }

    .order-details h6 {
      font-weight: bold;
      color: #D98C52;
    }

    .order-details .row span {
      font-weight: normal;
    }
  </style>
</head>

<body>
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Orders Table</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th>Ảnh</th>
                    <th>Tên Sách</th>
                    <th>Giá</th>
                    <th>Số Lượng</th>
                    <th>Tạm Tính</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($nhomdulieu as $donhang_id => $ctdh): ?>
                    <?php
                       $tongtien = 0;
                   ?>
                    <?php foreach ($ctdh['san_pham'] as $index => $product): ?>
                      <?php 
                        $tongtien += intval(str_replace('.', '', $product['gia'])) * (1 - ($product['giam'] / 100)) * $product['so_luong'];
                        ?>
                      <tr>
                        <td>
                          <img src="../layout/public/img/IMG_DA1/san pham/<?php echo $product['hinh']; ?>" 
                               style="width: 50px; height: auto;" alt="">
                        </td>
                        <td><?php echo $product['ten_sach']; ?></td>
                        <td><?php echo number_format(intval(str_replace('.', '', $product['gia'])) * (1 - ($product['giam']/100)), 0, '.', '.'); ?></td>
                        <td>x<?php echo $product['so_luong']; ?></td>
                        <td>
                          <?php 
                            $price = floatval(str_replace('.', '', $product['gia']));
                            $discount = $price * (1 - $product['giam'] / 100);
                            echo number_format($discount * $product['so_luong'], 0, '.', '.');
                          ?>
                        </td>
                      </tr>
                    <?php endforeach; ?>

                    <!-- Thông tin chi tiết đơn hàng -->
                    <tr class="order-details">
                      <td colspan="5">
                        <div class="row">
                          <div class="col-md-4">
                            <h6>Ngày Mua Hàng:</h6> <span class= 'fw-bold'><?php echo $ctdh['ngay_mua_hang']; ?></span>
                          </div>
                          <div class="col-md-4">
                            <h6>TT Thanh Toán:</h6> <span class= 'fw-bold'><?php echo $ctdh['tt_thanhtoan']; ?></span>
                          </div>
                          <div class="col-md-4">
                            <h6>TT Đơn Hàng:</h6> <span class= 'fw-bold'><?php echo $ctdh['tt_donhang']; ?></span>
                          </div>
                        </div>
                        <div class="row mt-2">
                          <div class="col-md-4">
                            <h6>Địa Chỉ:</h6> <span class= 'fw-bold'><?php echo $ctdh['dia_chi']; ?></span>
                          </div>
                          <div class="col-md-4">
                            <h6>Ghi Chú:</h6> <span class= 'fw-bold'><?php echo $ctdh['ghi_chu']; ?></span>
                          </div>
                          <div class="col-md-4">
                            <?php

                                 $tongtien_lam_tron = ceil($tongtien / 1000) * 1000;    
                            ?>
                            <h6>Tổng Tiền:</h6> <span class= 'fw-bold'><?php echo number_format($tongtien_lam_tron, 0, '.', '.'); ?> </span>
                          </div>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
