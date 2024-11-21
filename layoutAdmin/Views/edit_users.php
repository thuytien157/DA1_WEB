<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <style>
        .form-label {
            font-size: 0.875rem; 
            font-weight: bold;
        }
        .form-control {
            font-size: 0.875rem; 
        }
        .btn-primary {
            font-size: 0.875rem;
            font-weight: bold;
        }
        .bg-dark{
            background-color: #D98C52 !important;
  }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header pb-0">
                <h6 class="text-uppercase text-secondary text-xxs font-weight-bolder">Sửa Users</h6>
            </div>
            <div class="card-body px-4">
                <form method="POST" action="index.php?page=update_users">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($users['id']); ?>">
                    <div class="mb-3">
                        <label for="tenTacGia" class="form-label">Họ Tên</label>
                        <input type="text" class="form-control" name="id_khachhang" value="<?php echo htmlspecialchars($users['ho_ten']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="tenTacGia" class="form-label">SĐT</label>
                        <input type="text" class="form-control" name="ngay_giao_hang" value="<?php echo htmlspecialchars($users['sdt']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="tenTacGia" class="form-label">Usersname</label>
                        <input type="text" class="form-control" name="tt_thanhtoan" value="<?php echo htmlspecialchars($users['username']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="tenTacGia" class="form-label">Mật khẩu</label>
                        <input type="text" class="form-control" name="tt_donhang" value="<?php echo htmlspecialchars($users['mat_khau']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="tenTacGia" class="form-label">Email</label>
                        <input type="text" class="form-control" name="dia_chi" value="<?php echo htmlspecialchars($users['email']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="tenTacGia" class="form-label">Vai Trò</label>
                        <input type="text" class="form-control" name="ghi_chu" value="<?php echo htmlspecialchars($users['vai_tro']); ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu & Thay Đổi</button>
                </form>
            </div>
        </div>
    </div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
