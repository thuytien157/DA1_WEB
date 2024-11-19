<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quản Lý The Loai</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2 class="mb-4">Quản Lý The Loai</h2>
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addcategoryModal">Thêm The Loai</button>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Tên The Loai</th>
          <th>Hành Động</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($categories)): ?>
          <?php foreach ($categories as $categorie): ?>
            <tr>
              <td><?php echo htmlspecialchars($categorie['id']); ?></td>
              <td><?php echo htmlspecialchars($categorie['ten_theloai']); ?></td>
              <td>
              <a href="index.php?page=edit_category&id=<?php echo $categorie['id']; ?>" 
   class="btn btn-warning btn-sm">
   Sửa
</a>

    <a href="index.php?page=delete_category&id=<?php echo $categorie['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>
</td>

            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="4" class="text-center">Không có The Loai nào.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>

  <!-- Modal thêm The Loai -->
<div class="modal fade" id="addcategoryModal" tabindex="-1" aria-labelledby="addcategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addcategoryModalLabel">Thêm The Loai</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="index.php?page=add_category">
                    <div class="mb-3">
                        <label for="tenTheloai" class="form-label">Tên The Loai</label>
                        <input type="text" class="form-control" id="tenTheloai" name="ten_theloai" required>
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
