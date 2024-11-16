<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quản Lý Tác Giả</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2 class="mb-4">Quản Lý Tác Giả</h2>
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addAuthorModal">Thêm Tác Giả</button>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Tên Tác Giả</th>
          <th>Hành Động</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($authors)): ?>
          <?php foreach ($authors as $author): ?>
            <tr>
              <td><?php echo htmlspecialchars($author['id']); ?></td>
              <td><?php echo htmlspecialchars($author['ten_tacgia']); ?></td>
              <td>
              <a href="index.php?page=edit_author&id=<?php echo $author['id']; ?>" 
   class="btn btn-warning btn-sm">
   Sửa
</a>

    <a href="index.php?page=delete_author&id=<?php echo $author['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>
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

  <!-- Modal thêm tác giả -->
<div class="modal fade" id="addAuthorModal" tabindex="-1" aria-labelledby="addAuthorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addAuthorModalLabel">Thêm Tác Giả</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="index.php?page=add_author">
                    <div class="mb-3">
                        <label for="tenTacGia" class="form-label">Tên Tác Giả</label>
                        <input type="text" class="form-control" id="tenTacGia" name="ten_tacgia" required>
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
