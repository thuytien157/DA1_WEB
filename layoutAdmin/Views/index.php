<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    .bg-dark {
      background-color: #D98C52 !important;
    }
    .main-container {
      max-width: 100%;
    }
    .sidebar {
      background-color: #D98C52 !important;
    }
    .nav-link {
      color: #fff !important;
      font-weight: bold;
    }
    .nav-link:hover {
      background-color: #B77D42 !important; /* Darker shade on hover */
    }
    .card-body {
      background-color: #F4F1ED;
      border-radius: 10px;
    }
    .card {
      border-radius: 10px;
      border: none;
    }
    .card-title {
      color: #D98C52;
      font-weight: bold;
    }
    .card-text {
      color: #D98C52;
      font-size: 1.5rem;
    }
    .chart-container {
      background-color: #fff;
      border-radius: 10px;
      padding: 1rem;
    }
    .chart-title {
      color: #D98C52;
      font-weight: bold;
    }
    h4 {
      color: #D98C52 !important;
    }
  </style>
</head>

<body>
    <!-- Main Content -->
    <div class="container-fluid p-4 main-container">
      <h4 class="mb-4">Welcome
        <?php
          echo isset($_SESSION['user']['username']) ? $_SESSION['user']['username'] : "";
        ?> !
      </h4>

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
              <p class="card-text fs-4">10890</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Charts -->
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="chart-container">
            <h5 class="chart-title">Số lượng sách đã bán</h5>
            <canvas id="salesChart"></canvas>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="chart-container">
            <h5 class="chart-title">Thể loại sách bán chạy</h5>
            <canvas id="categoryChart"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script>
    // Biểu đồ số lượng sách đã bán (Line Chart)
    const salesCtx = document.getElementById('salesChart').getContext('2d');
    new Chart(salesCtx, {
      type: 'line', // Line chart for sales
      data: {
        labels: ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ nhật'],
        datasets: [{
          label: 'Số sách đã bán',
          data: [12, 19, 10, 15, 22, 30, 25],
          backgroundColor: 'rgba(75, 192, 192, 0.2)', // Line fill color
          borderColor: 'rgba(75, 192, 192, 1)', // Line border color
          borderWidth: 2,
          tension: 0.4 // Smooth the line curve
        }]
      }
    });

    // Biểu đồ thể loại sách bán chạy (Line Chart)
    const categoryCtx = document.getElementById('categoryChart').getContext('2d');
    new Chart(categoryCtx, {
      type: 'line', // Line chart for category sales
      data: {
        labels: ['Văn học', 'Kinh tế', 'Khoa học', 'Trẻ em', 'Tiểu thuyết'],
        datasets: [{
          label: 'Số lượng sách',
          data: [30, 20, 15, 25, 10],
          backgroundColor: 'rgba(255, 99, 132, 0.2)', // Line fill color
          borderColor: 'rgba(255, 99, 132, 1)', // Line border color
          borderWidth: 2,
          tension: 0.4 // Smooth the line curve
        }]
      }
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>