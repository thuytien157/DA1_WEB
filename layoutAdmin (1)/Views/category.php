<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quản Lý Thể Loại</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2 class="mb-4">Quản Lý Thể Loại</h2>
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addCategoryModal">Thêm Thể Loại</button>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Tên Thể Loại</th>
          <th>Mô Tả</th>
          <th>Hành Động</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Văn học</td>
          <td>Sách về văn học cổ điển và hiện đại</td>
          <td>
            <button class="btn btn-warning btn-sm">Sửa</button>
            <button class="btn btn-danger btn-sm">Xóa</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Modal thêm thể loại -->
  <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addCategoryModalLabel">Thêm Thể Loại</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="categoryName" class="form-label">Tên Thể Loại</label>
              <input type="text" class="form-control" id="categoryName" placeholder="Nhập tên thể loại">
            </div>
            <div class="mb-3">
              <label for="categoryDescription" class="form-label">Mô Tả</label>
              <textarea class="form-control" id="categoryDescription" placeholder="Nhập mô tả"></textarea>
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
