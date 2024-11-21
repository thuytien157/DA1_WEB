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
              <div class="header-actions">
                <a href="#" style=" color:  #D98C52 !important" class="text-secondary font-weight-bold text-xs action-link" data-bs-toggle="modal" data-bs-target="#addOrderModal">
                  Create
                </a>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table style="color: #6c757d !important;" class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th style="color: black !important;" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mã Đơn Hàng</th>
                      <th style="color: black !important;" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ID Khách Hàng</th>
                      <th style="color: black !important;" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên Khách Hàng</th>
                      <th style="color: black !important;" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ngày Giao Hàng</th>
                      <th style="color: black !important;" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Trạng Thái Thanh Toán</th>
                      <th style="color: black !important;" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Trạng Thái Đơn Hàng</th>
                      <th style="color: black !important;" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Địa Chỉ</th>
                      <th style="color: black !important;" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ghi Chú</th>
                      <th style="color: black !important;" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Acction</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!empty($Orders)): ?>
                      <?php foreach ($Orders as $Order): ?>
                        <tr>
                          <td>
                            <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($Order['id']); ?></h6>
                          </td>
                          <td>
                            <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($Order['id_khachhang']); ?></h6>
                          </td>
                          <td>
                            <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($Order['ten_khachhang']); ?></h6>
                          </td>
                          <td>
                            <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($Order['ngay_giao_hang']); ?></h6>
                          </td>
                          <td>
                            <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($Order['tt_thanhtoan']); ?></h6>
                          </td>
                          <td>
                            <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($Order['tt_donhang']); ?></h6>
                          </td>
                          <td>
                            <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($Order['dia_chi']); ?></h6>
                          </td>
                          <td>
                            <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($Order['ghi_chu']); ?></h6>
                          </td>
                          <td class="align-middle text-center">
                            <a href="index.php?page=edit_order&id=<?php echo $Order['id']; ?>" style=" color:  #F5CA0F !important" class="text-secondary font-weight-bold text-xs action-link">
                              Edit
                            </a>
                            <br>
                            <a href="index.php?page=delete_order&id=<?php echo $Order['id']; ?>" style=" color:  #F5110F !important" onclick="return confirm('Bạn có chắc chắn muốn xóa?');" class="text-secondary font-weight-bold text-xs action-link">
                              Delete
                            </a>
                            <br>
                            <a href="index.php?page=details&id=<?php echo $Order['id']; ?>" style=" color:  #000 !important" class="text-secondary font-weight-bold text-xs action-link">
                            Xem chi tiết đơn hàng
                            </a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    <?php else: ?>
                      <tr>
                        <td colspan="4" class="text-center">Không có đơn hàng nào.</td>
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

  <!-- Modal thêm tác giả -->
  <div class="modal fade" id="addOrderModal" tabindex="-1" aria-labelledby="addOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addOrderModalLabel">Thêm Đơn Hàng</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="index.php?page=add_order">
            <div class="mb-3">
              <label for="tenTacGia" class="form-label">ID Khách Hàng</label>
              <input type="text" class="form-control" name="id_khachhang" required>
            </div>
            <div class="mb-3">
              <label for="tenTacGia" class="form-label">Ngày Giao Hàng</label>
              <input type="text" class="form-control" name="ngay_giao_hang" required>
            </div>
            <div class="mb-3">
              <label for="tenTacGia" class="form-label">Trạng Thái Thanh Toán</label>
              <select class="form-select" name="tt_khachang" required>
              <option value="Hoàn thành">Đã thanh toán</option>
                <option value="Chờ xử lý">Chưa thanh toán</option>
                <option value="Đang giao">nợ</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="tenTacGia" class="form-label">Trạng Thái Đơn Hàng</label>
              <select class="form-select" name="tt_donhang" required>
              <option value="Hoàn thành">Đã xác nhận đâu</option>
                <option value="Chờ xử lý">Chờ xử lý</option>
                <option value="Đang giao">Đang giao</option>
                <option value="Đã giao">Đã giao</option>
                <option value="Hoàn thành">Hoàn thành</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="tenTacGia" class="form-label">Địa Chỉ</label>
              <input type="text" class="form-control" name="dia_chi" required>
            </div>
            <div class="mb-3">
              <label for="tenTacGia" class="form-label">Ghi Chú</label>
              <input type="text" class="form-control" name="ghi_chu" required>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>