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

    .modal-content {
      border-radius: 8px;
    }

    .modal-header {
      background-color: #D98C52;
      color: white;
    }

    .modal-footer .btn-primary {
      background-color: #D98C52;
      border: none;
    }

    .modal-footer .btn-secondary {
      color: #D98C52;
      border: 1px solid #D98C52;
    }

    .modal-footer .btn-secondary:hover {
      background-color: #D98C52;
      color: white;
    }

    .header-actions {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
    }

    .header-actions a {
      color: #D98C52 !important;
      font-weight: bold;
    }

    .header-actions a:hover {
      color: #B77D42 !important;
    }

    .icon-eye {
      font-size: 1.5rem;
      /* Tăng kích thước icon */
      color: #D98C52;
      /* Màu da cam */
      display: inline-block;
      vertical-align: middle;
      transition: color 0.3s ease;
    }

    .icon-eye:hover {
      color: darkorange;
      /* Màu đậm hơn khi hover */
    }
  </style>

</head>

<body>
  <div class="container-fluid d-flex">

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
                      <th style="color: black !important;" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Khách Hàng</th>
                      <th style="color: black !important;" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SĐT</th>
                      <th style="color: black !important;" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ngày Mua Hàng</th>
                      <th style="color: black !important;" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Trạng Thái Thanh Toán</th>
                      <th style="color: black !important;" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Trạng Thái Đơn Hàng</th>
                      <th style="color: black !important;" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Xem chi tiết</th>

                    </tr>
                  </thead>
                  <tbody>

                    <?php if (!empty($Orders)): ?>
                      <?php foreach ($Orders as $Order): ?>
                        <tr>
                          <td >
                            <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($Order['id']); ?></h6>
                          </td>
                          <td >
                            <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($Order['id_khachhang'] . "-" . $Order['ten_khachhang']); ?></h6>
                          </td>
                          <td class="text-center">
                            <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($Order['sdt']); ?></h6>
                          </td>
                          <td class="text-center">
                            <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($Order['ngay_mua_hang']); ?></h6>
                          </td>
                          <td class="text-center">
                            <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($Order['tt_thanhtoan']); ?></h6>
                          </td>
                          <td class="text-center">
                            <form method="POST"  action="index.php?page=update_order_status">
                              <input type="hidden" name="id" value="<?php echo htmlspecialchars($Order['id'], ENT_QUOTES); ?>">

                              <?php if ($Order['tt_donhang'] == 'Đã hủy'): ?>
                                <button class="form-select d-inline-block w-auto " type="button" disabled style="background-color: #f5f5f5; color: #a0a0a0;">Đã hủy</button>
                              <?php else: ?>
                              

                                
                                
                                <select name="tt_donhang" class="form-select d-inline-block w-auto" onchange="this.form.submit()">
                                  <option value="Chờ xử lý"
                                    <?php echo $Order['tt_donhang'] == 'Chờ xử lý' ? 'selected' : ''; ?>
                                    <?php echo in_array($Order['tt_donhang'], ['Đang giao', 'Hoàn thành']) ? 'disabled' : ''; ?>>Chờ xử lý</option>

                                  <option value="Đang giao"
                                    <?php echo $Order['tt_donhang'] == 'Đang giao' ? 'selected' : ''; ?>
                                    <?php echo $Order['tt_donhang'] == 'Hoàn thành' ? 'disabled' : ''; ?>>Đang giao</option>

                                  <option value="Hoàn thành"
                                    <?php echo $Order['tt_donhang'] == 'Hoàn thành' ? 'selected' : ''; ?>>Hoàn thành</option>
                                </select>
                              <?php endif; ?>
                            </form>
                          </td>
                          <td class="text-center align-items-center">
                            <form method="POST" action="index.php?page=update_order_status" style="display:inline;">
                              <input type="hidden" name="id" value="<?php echo htmlspecialchars($Order['id'], ENT_QUOTES); ?>">
                              <input type="hidden" name="tt_donhang" value="Đã hủy">
                              <button class="btn btn-warning me-2" type="submit" 
                                  <?php echo in_array($Order['tt_donhang'], ['Đã hủy', 'Hoàn thành']) ? 'disabled' : ''; ?>>
                                  Hủy đơn hàng
                                </button>
                            </form>
                            <a href="index.php?page=details&id=<?= $Order['id'] ?>">
                              <i class="bi bi-eye-fill icon-eye"></i>
                            </a>
                          </td>


                        </tr>
                      <?php endforeach; ?>
                    <?php else: ?>
                      <tr>
                        <td colspan="8" class="text-center">Không có đơn hàng nào.</td>
                      </tr>
                    <?php endif; ?>
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