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
    <div class="container-fluid p-4 main-container">
      <h4 class="mb-4">Welcome
        <?php
          echo isset($_SESSION['user']['username']) ? $_SESSION['user']['username'] : "";
        ?> !
      </h4>
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="chart-container">
            <h5 class="chart-title">Số lượng sách đã bán</h5>
            <canvas id="salesChart"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    // Dữ liệu từ PHP truyền vào JavaScript
    const data = <?php echo json_encode($data); ?>;
    const labels = data.map(item => item.ngay);
    const soLuong = data.map(item => item.so_luong);

    const salesCtx = document.getElementById('salesChart').getContext('2d');
    new Chart(salesCtx, {
      type: 'line', 
      data: {
        labels: labels,
        datasets: [{
          label: 'Số sách đã bán',
          data: soLuong,
          backgroundColor: 'rgba(75, 192, 192, 0.2)', 
          borderColor: 'rgba(75, 192, 192, 1)', 
          borderWidth: 2,
          tension: 0.4 
        }]
      }
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
