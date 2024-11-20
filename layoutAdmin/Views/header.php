<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Header Redesign</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
  .navbar-brand span{
    color: #D98C52 !important;
    
  }
</style>
<body>
  <!-- Header -->
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="index.php?page=home">
          <span>AdminPanel</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navigation Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a style="color: #D98C52 !important;" class="nav-link" href=""> <?php
      echo isset($_SESSION['user']['username']) ? $_SESSION['user']['username']:"";
      ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=logout"> <?php
                                                              echo isset($_SESSION['user']['username']) ?"Chuyển lại trang web" : "";
                                                              ?></a>
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