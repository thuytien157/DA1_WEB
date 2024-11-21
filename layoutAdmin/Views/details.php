<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .sidebar {
      width: 250px;
      min-height: 100vh;
    }

    .content {
      flex-grow: 1;
    }

    .action-link+.action-link {
      margin-left: 15px;
    }

    .card-header .header-actions {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
    }

    .bg-dark {
      background-color: #D98C52 !important;
    }

    .card-header h6 {
      color: black !important;
    }
  </style>
</head>

<body>
  <div class="d-flex">
    <div class="bg-dark text-white p-3 sidebar">
      <ul class="nav flex-column mt-4">
        <li class="nav-item"><a href="index.php?page=home" class="nav-link text-white">Tổng quan</a></li>
        <li class="nav-item"><a href="index.php?page=category" class="nav-link text-white">Quản lý thể loại</a></li>
        <li class="nav-item"><a href="index.php?page=author" class="nav-link text-white">Quản lý tác giả</a></li>
        <li class="nav-item"><a href="index.php?page=publishinghouse" class="nav-link text-white">Quản lý nhà xuất bản</a></li>
        <li class="nav-item"><a href="index.php?page=order" class="nav-link text-white">Quản lý đơn hàng</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white">Thống kê</a></li>
      </ul>
    </div>
    <div class="container-fluid py-4 content">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 position-relative">
              <h6 class="d-inline-block">Orders table</h6>
              <!-- Nút Create nằm sát bên phải -->
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table style="color: #6c757d !important;" class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th style="color: black !important;" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mã Đơn Hàng</th>
                      <th style="color: black !important;" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Sách</th>
                      <th style="color: black !important;" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ngày Mua Hàng</th>
                      <th style="color: black !important;" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TT Thanh Toán</th>
                      <th style="color: black !important;" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TT Đơn Hàng</th>
                      <th style="color: black !important;" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Địa Chỉ</th>
                      <th style="color: black !important;" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ghi Chú</th>
                      <th style="color: black !important;" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tổng tiền</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($nhomdulieu as $donhang_id => $ctdh): ?>
                      <tr>
                          <td>
                              <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($donhang_id); ?></h6>
                          </td>
                          <td>
                              <?php foreach ($ctdh['san_pham'] as $product): ?>
                                  <h6 class="mb-0 text-sm">
                                      <?php echo htmlspecialchars($product['ten_sach']); ?> 
                                      (SL: <?php echo htmlspecialchars($product['so_luong']); ?>, Giá: <?php echo htmlspecialchars($product['gia']); ?>đ)
                                  </h6>
                              <?php endforeach; ?>
                          </td>
                          <td>
                              <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($ctdh['ngay_giao_hang']); ?></h6>
                          </td>
                          <td>
                              <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($ctdh['tt_thanhtoan']); ?></h6>
                          </td>
                          <td>
                              <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($ctdh['tt_donhang']); ?></h6>
                          </td>
                          <td>
                              <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($ctdh['dia_chi']); ?></h6>
                          </td>
                          <td>
                              <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($ctdh['ghi_chu']); ?></h6>
                          </td>
                          <td>
                              <h6 class="mb-0 text-sm"><?php echo $ctdh['tong_tien']*1000; ?>đ</h6>
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
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
