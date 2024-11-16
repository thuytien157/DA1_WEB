<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Header Redesign</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .navbar {
      background-color: #F5F5F5;
    }
    .navbar-brand {
      font-weight: bold;
      font-size: 24px;
      color: #4A4A4A !important;
    }
    .nav-link {
      color: black !important;
      font-size: 16px;
      transition: color 0.3s ease;
    }
    .nav-link:hover {
      color: brown !important;
    }
    .dropdown-menu {
      background-color: #4A4A4A;
      border: none;
    }
    .dropdown-item {
      color: #F5F5F5;
    }
    .dropdown-item:hover {
      color: #FFD700;
      background-color: transparent;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="index.php?page=home">
          <img src="../public/img/Brown_Retro_Book_Store_Logo.png" alt="Logo" width="40" height="40" class="me-2">
          <span>AdminPanel</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navigation Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=home">Trang Chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=product">Sản phẩm</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=user">Người dùng</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=form">Form Cập nhật</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
