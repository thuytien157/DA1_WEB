<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <!-- Sidebar -->
  <div class="d-flex">
    <div class="bg-dark text-white p-3" style="width: 250px; min-height: 100vh;">
      <ul class="nav flex-column mt-4">
        <li class="nav-item"><a href="#" class="nav-link text-white">Tổng quan</a></li>
        <li class="nav-item"><a href="index.php?page=category" class="nav-link text-white">Quản lý thể loại</a></li>
        <li class="nav-item"><a href="index.php?page=author" class="nav-link text-white">Quản lý tác giả</a></li>
        <li class="nav-item"><a href="index.php?page=publishinghouse" class="nav-link text-white">Quản lý nhà xuất bản</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white">Thống kê</a></li>
      </ul>
    </div>

    <!-- Main Content -->
    <div class="container-fluid p-4">
      <h2 class="mb-4">Wellcom
      <?php
      echo isset($_SESSION['user']['username']) ? $_SESSION['user']['username']:"";
      ?> !</h2>

      <!-- Statistics -->
      <div class="row">
        <div class="col-md-3 mb-3">
          <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">Sách đã bán</h5>
              <p class="card-text fs-4">120</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">Doanh thu hôm nay</h5>
              <p class="card-text fs-4">2,000,000 VNĐ</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">Doanh thu tháng</h5>
              <p class="card-text fs-4">45,000,000 VNĐ</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">Sách còn trong kho</h5>
              <p class="card-text fs-4">340</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Charts -->
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Số lượng sách đã bán</h5>
              <canvas id="salesChart"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Thể loại sách bán chạy</h5>
              <canvas id="categoryChart"></canvas>
            </div>
          </div>
        </div>
      </div>

      <!-- Recent Orders -->
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Đơn hàng gần đây</h5>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Mã đơn hàng</th>
                <th>Tên khách hàng</th>
                <th>Tên sách</th>
                <th>Số lượng</th>
                <th>Tổng tiền</th>
                <th>Ngày mua</th>
                <th>Trạng thái</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>#1001</td>
                <td>Nguyễn Văn A</td>
                <td>Atomic Habits</td>
                <td>2</td>
                <td>300,000 VNĐ</td>
                <td>15/11/2024</td>
                <td>Hoàn tất</td>
              </tr>
              <tr>
                <td>#1002</td>
                <td>Trần Thị B</td>
                <td>Cây Cam Ngọt Của Tôi</td>
                <td>1</td>
                <td>150,000 VNĐ</td>
                <td>14/11/2024</td>
                <td>Đang xử lý</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script>
    // Biểu đồ số lượng sách đã bán
    const salesCtx = document.getElementById('salesChart').getContext('2d');
    new Chart(salesCtx, {
      type: 'bar',
      data: {
        labels: ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ nhật'],
        datasets: [{
          label: 'Số sách đã bán',
          data: [12, 19, 10, 15, 22, 30, 25],
          backgroundColor: 'rgba(75, 192, 192, 0.5)',
        }]
      }
    });

    // Biểu đồ thể loại sách bán chạy
    const categoryCtx = document.getElementById('categoryChart').getContext('2d');
    new Chart(categoryCtx, {
      type: 'pie',
      data: {
        labels: ['Văn học', 'Kinh tế', 'Khoa học', 'Trẻ em', 'Tiểu thuyết'],
        datasets: [{
          label: 'Thể loại',
          data: [30, 20, 15, 25, 10],
          backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF']
        }]
      }
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
