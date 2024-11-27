
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
</style>

</head>
<body>


  <div class="container-fluid py-4 d-flex">
    <div class="container-fluid py-4 content">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 position-relative">
              <h6 class="d-inline-block">Book Table</h6>
              <div class="header-actions">
                <a href="#" style="color:  #D98C52 !important" class="text-secondary font-weight-bold text-xs action-link" data-bs-toggle="modal" data-bs-target="#addBookModal">
                  Create
                </a>
              </div>
            </div>

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Category</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Book</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Publishinghouse</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantity</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Entry date</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Year of publication</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Describe</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Images</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!empty($books)): ?>
                    <?php foreach ($books as $book): ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($book['id']); ?></h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($book['ten_sach']); ?></h6>
                      </td>
                      <td>
                        <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($book['ten_theloai']); ?></h6>
                      </td>
                      <td>
                        <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($book['ten_tacgia']); ?></h6>
                      </td>
                      <td>
                        <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($book['ten_nxb']); ?></h6>
                      </td>
                      <td>
                        <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($book['gia']); ?></h6>
                      </td>
                      <td>
                        <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($book['so_luong_ban']); ?></h6>
                      </td>
                      <td>
                        <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($book['ngay_nhap']); ?></h6>
                      </td>
                      <td>
                        <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($book['nam_xb']); ?></h6>
                      </td>
                      <td>
  <h6 class="mb-0 text-sm">
    <?php 
      $mo_ta = htmlspecialchars($book['mo_ta']);
      echo strlen($mo_ta) > 50 ? substr($mo_ta, 0, 50) . '...' : $mo_ta; 
    ?>
  </h6>
  <?php if (strlen($mo_ta) > 50): ?>
    <a href="#" class="action-link view-description" data-bs-toggle="modal" data-bs-target="#viewDescriptionModal-<?php echo $book['id']; ?>">
      <i class="bi bi-eye"></i> <!-- Biểu tượng con mắt -->
    </a>
  <?php endif; ?>
</td>


<td>
  <?php if (!empty($book['hinh'])): ?>
    <img src="<?='../../layout/public/img/IMG_DA1/san pham/'. $book['hinh']; ?>" alt="Images" style="width: 50px; height: auto; margin-right: 10px;">
  <?php endif; ?>
  
</td>          
                      <td class="align-middle text-center">
                        <a href="index.php?page=edit_book&id=<?php echo $book['id']; ?>" style="color:  #F5CA0F !important" class="text-secondary font-weight-bold text-xs action-link">Edit</a>
                        <a href="index.php?page=delete_book&id=<?php echo $book['id']; ?>" style="color:  #F5110F !important" onclick="return confirm('Bạn có chắc chắn muốn xóa?');" class="text-secondary font-weight-bold text-xs action-link">Delete</a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php else: ?>
                    <tr>
                      <td colspan="4" class="text-center">Không có tác giả nào.</td>
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
<!--model full mota-->
  <?php foreach ($books as $book): ?>
<div class="modal fade" id="viewDescriptionModal-<?php echo $book['id']; ?>" tabindex="-1" aria-labelledby="viewDescriptionLabel-<?php echo $book['id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewDescriptionLabel-<?php echo $book['id']; ?>">Chi Tiết Mô Tả</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php echo nl2br(htmlspecialchars($book['mo_ta'])); ?>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn" style="background-color: #D98C52; color: white; border: none;" data-bs-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
  <!--model them sach -->
<div class="modal fade" id="addBookModal" tabindex="-1" aria-labelledby="addBookModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addBookModalLabel">Thêm Sách</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="index.php?page=add_book">
        <!-- Tên Thể Loại -->
        <div class="mb-3">
  <label for="tenTheloai" class="form-label">Tên Thể Loại</label>
  <select class="form-select" name="ten_theloai_id" required>
    <option value="">Chọn Thể Loại</option>
    <?php if (!empty($tl)): ?>
      <?php foreach ($tl as $categories): ?>
        <option value="<?= htmlspecialchars($categories['id']); ?>">
          <?= htmlspecialchars($categories['ten_theloai']); ?>
        </option>
      <?php endforeach; ?>
    <?php else: ?>
      <option value="">Không có thể loại</option>
    <?php endif; ?>
  </select>
</div>

<!-- Tên Tác Giả -->
<div class="mb-3">
  <label for="tenTacgia" class="form-label">Tên Tác Giả</label>
  <select class="form-select" name="ten_tacgia_id" required>
    <option value="">Chọn Tác Giả</option>
    <?php if (!empty($tg)): ?>
      <?php foreach ($tg as $authors): ?>
        <option value="<?= htmlspecialchars($authors['id']); ?>">
          <?= htmlspecialchars($authors['ten_tacgia']); ?>
        </option>
      <?php endforeach; ?>
    <?php else: ?>
      <option value="">Không có tác giả</option>
    <?php endif; ?>
  </select>
</div>


<!-- Tên Nhà Xuất Bản -->
<div class="mb-3">
  <label for="tenNxb" class="form-label">Tên Nhà Xuất Bản</label>
  <select class="form-select" name="ten_nxb_id" required>
    <option value="">Chọn Nhà Xuất Bản</option>
    <?php if (!empty($nxb)): ?>
      <?php foreach ($nxb as $publishinghouse): ?>
        <option value="<?= htmlspecialchars($publishinghouse['id']); ?>">
          <?= htmlspecialchars($publishinghouse['ten_nxb']); ?>
        </option>
      <?php endforeach; ?>
    <?php else: ?>
      <option value="">Không có nhà xuất bản</option>
    <?php endif; ?>
  </select>
</div>

          <!-- Các trường khác -->
          <div class="mb-3">
            <label for="tenSach" class="form-label">Tên Sách</label>
            <input type="text" class="form-control" name="ten_sach" required>
          </div>

          <div class="mb-3">
            <label for="hinh" class="form-label">Hình ảnh</label>
            <input type="file" class="form-control" name="hinh" required>
          </div>

          <div class="mb-3">
            <label for="gia" class="form-label">Giá</label>
            <input type="number" class="form-control" name="gia" required>
          </div>

          <div class="mb-3">
            <label for="giam" class="form-label">Giảm giá</label>
            <input type="number" class="form-control" name="giam" required>
          </div>

          <div class="mb-3">
            <label for="moTa" class="form-label">Mô Tả</label>
            <textarea class="form-control" name="mo_ta" required></textarea>
          </div>

          <div class="mb-3">
            <label for="namXb" class="form-label">Năm Xuất Bản</label>
            <input type="number" class="form-control" name="nam_xb" required>
          </div>

          <div class="mb-3">
            <label for="soLuongBan" class="form-label">Số Lượng Bán</label>
            <input type="number" class="form-control" name="so_luong_ban" required>
          </div>

          <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
      </div>
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

