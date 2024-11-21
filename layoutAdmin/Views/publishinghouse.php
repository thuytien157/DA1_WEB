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

    .action-link + .action-link {
      margin-left: 15px; 
    }
<<<<<<< HEAD
=======

>>>>>>> be27119b4ddda5d1dcaaaf66816e7c8db9f4894c
    .card-header .header-actions {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
    }
<<<<<<< HEAD
    .bg-dark {
      background-color: #D98C52 !important;
    }
    .card-header h6 {
      color: black !important;
    }
=======
    .bg-dark{
            background-color: #D98C52 !important;
  }
  .card-header h6{
    color: black !important;
    
  }
  
>>>>>>> be27119b4ddda5d1dcaaaf66816e7c8db9f4894c
  </style>
</head>

<body>
  <div class="d-flex">
<<<<<<< HEAD
=======
    <!-- Sidebar -->
>>>>>>> be27119b4ddda5d1dcaaaf66816e7c8db9f4894c
    <div class="bg-dark text-white p-3 sidebar">
      <ul class="nav flex-column mt-4">
        <li class="nav-item"><a href="index.php?page=home" class="nav-link text-white">Tổng quan</a></li>
        <li class="nav-item"><a href="index.php?page=category" class="nav-link text-white">Quản lý thể loại</a></li>
        <li class="nav-item"><a href="index.php?page=author" class="nav-link text-white">Quản lý tác giả</a></li>
        <li class="nav-item"><a href="index.php?page=publishinghouse" class="nav-link text-white">Quản lý nhà xuất bản</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white">Thống kê</a></li>
      </ul>
    </div>
    <div class="container-fluid py-4 content">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 position-relative">
<<<<<<< HEAD
              <h6 class="d-inline-block">Publishing Houses Table</h6>
              <div class="header-actions">
                <a href="#" style=" color:  #D98C52 !important" class="text-secondary font-weight-bold text-xs action-link" data-bs-toggle="modal" data-bs-target="#addPublishingHouseModal">
=======
              <h6 class="d-inline-block">Category table</h6>
              <!-- Nút Create nằm sát bên phải -->
              <div class="header-actions ms-auto">
                <a href="#" style=" color:  #D98C52 !important" class="text-secondary font-weight-bold text-xs action-link" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
>>>>>>> be27119b4ddda5d1dcaaaf66816e7c8db9f4894c
                  Create
                </a>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
<<<<<<< HEAD
                <table style="color: #6c757d !important;" class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th style="color: black !important;" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                      <th style="color: black !important;" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Publishing House Name</th>
=======
                <table style="color: #6c757d !important;"  class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th style="color: black !important;"  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                      <th style="color: black !important;"  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Categories Name</th>
                      <th style="color: black !important;" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
>>>>>>> be27119b4ddda5d1dcaaaf66816e7c8db9f4894c
                      <th style="color: black !important;" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
<<<<<<< HEAD
                    <?php if (!empty($publishinghouses)): ?>
                    <?php foreach ($publishinghouses as $publishinghouse): ?>
=======
                    <?php if (!empty($categories)): ?>
                    <?php foreach ($categories as $categorie): ?>
>>>>>>> be27119b4ddda5d1dcaaaf66816e7c8db9f4894c
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
<<<<<<< HEAD
                            <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($publishinghouse['id']); ?></h6>
=======
                            <h6  class="mb-0 text-sm"><?php echo htmlspecialchars($categorie['id']); ?></h6>
>>>>>>> be27119b4ddda5d1dcaaaf66816e7c8db9f4894c
                          </div>
                        </div>
                      </td>
                      <td>
<<<<<<< HEAD
                        <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($publishinghouse['ten_nxb']); ?></h6>
                      </td>
                      <td class="align-middle text-center">
                        <a href="index.php?page=edit_publishinghouse&id=<?php echo $publishinghouse['id']; ?>" style=" color:  #F5CA0F !important" class="text-secondary font-weight-bold text-xs action-link">
                          Edit
                        </a>
                        <a href="index.php?page=delete_publishinghouse&id=<?php echo $publishinghouse['id']; ?>" style=" color:  #F5110F !important" onclick="return confirm('Bạn có chắc chắn muốn xóa?');" class="text-secondary font-weight-bold text-xs action-link">
=======
                        <h6  class="mb-0 text-sm"><?php echo htmlspecialchars($categorie['ten_theloai']); ?></h6>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">2024</span>
                      </td>
                      <td class="align-middle text-center">
                        <a href="index.php?page=edit_category&id=<?php echo $categorie['id']; ?>" style=" color:  #F5CA0F !important" class="text-secondary font-weight-bold text-xs action-link">
                          Edit
                        </a>
                        <a href="index.php?page=delete_category&id=<?php echo $categorie['id']; ?>" style=" color:  #F5110F !important" onclick="return confirm('Bạn có chắc chắn muốn xóa?');" class="text-secondary font-weight-bold text-xs action-link">
>>>>>>> be27119b4ddda5d1dcaaaf66816e7c8db9f4894c
                          Delete
                        </a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php else: ?>
                    <tr>
<<<<<<< HEAD
                      <td colspan="3" class="text-center">Không có nhà xuất bản nào.</td>
=======
                      <td colspan="4" class="text-center">Không có tác thể loại nào.</td>
>>>>>>> be27119b4ddda5d1dcaaaf66816e7c8db9f4894c
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

<<<<<<< HEAD
  <!-- Modal thêm nhà xuất bản -->
  <div class="modal fade" id="addPublishingHouseModal" tabindex="-1" aria-labelledby="addPublishingHouseModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addPublishingHouseModalLabel">Thêm Nhà Xuất Bản</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="index.php?page=add_publishinghouse">
            <div class="mb-3">
              <label for="tenNXB" class="form-label">Tên Nhà Xuất Bản</label>
              <input type="text" class="form-control" id="tenNXB" name="ten_nxb" required>
=======
  <!-- Modal thêm thể loại -->
  <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addCategoryModalLabel">Thêm Thể Loại</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="index.php?page=add_category">
            <div class="mb-3">
              <label for="tenTheLoai" class="form-label">Tên Thể Loại</label>
              <input type="text" class="form-control" id="tenTheLoai" name="ten_theloai" required>
>>>>>>> be27119b4ddda5d1dcaaaf66816e7c8db9f4894c
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
