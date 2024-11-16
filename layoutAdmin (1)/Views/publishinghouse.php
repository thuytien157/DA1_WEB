<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quản Lý Nhà Xuất Bản</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2 class="mb-4">Quản Lý Nhà Xuất Bản</h2>
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addPublisherModal">Thêm Nhà Xuất Bản</button>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Tên Nhà Xuất Bản</th>
          <th>Thông Tin</th>
          <th>Hành Động</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>NXB Kim Đồng</td>
          <td>Nhà xuất bản sách cho thiếu nhi hàng đầu Việt Nam</td>
          <td>
            <button class="btn btn-warning btn-sm">Sửa</button>
            <button class="btn btn-danger btn-sm">Xóa</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Modal thêm NXB -->
  <div class="modal fade" id="addPublisherModal" tabindex="-1" aria-labelledby="addPublisherModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addPublisherModalLabel">Thêm Nhà Xuất Bản</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="publisherName" class="form-label">Tên Nhà Xuất Bản</label>
              <input type="text" class="form-control" id="publisherName" placeholder="Nhập tên NXB">
            </div>
            <div class="mb-3">
              <label for="publisherInfo" class="form-label">Thông Tin</label>
              <textarea class="form-control" id="publisherInfo" placeholder="Nhập thông tin"></textarea>
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
