<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa đơn hàng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
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

        .bg-dark {
            background-color: #D98C52 !important;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header pb-0">
                <h6 class="text-uppercase text-secondary text-xxs font-weight-bolder">Sửa Đơn Hàng</h6>
            </div>
            <div class="card-body px-4">
                <form method="POST" action="index.php?page=update_order">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($order['id']); ?>">
                    <div class="mb-3">
                        <label for="tenTacGia" class="form-label">ID Khách Hàng</label>
                        <input type="text" class="form-control" name="id_khachhang" value="<?php echo htmlspecialchars($order['id_khachhang']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="tenTacGia" class="form-label">Ngày Giao Hàng</label>
                        <input type="text" class="form-control" name="ngay_giao_hang" value="<?php echo htmlspecialchars($order['ngay_giao_hang']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="tenTacGia" class="form-label">Trạng Thái Thanh Toán</label>
                        <input type="text" class="form-control" name="tt_thanhtoan" value="<?php echo htmlspecialchars($order['tt_thanhtoan']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="tenTacGia" class="form-label">Trạng Thái Đơn Hàng</label>
                        <input type="text" class="form-control" name="tt_donhang" value="<?php echo htmlspecialchars($order['tt_donhang']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="tenTacGia" class="form-label">Địa Chỉ</label>
                        <input type="text" class="form-control" name="dia_chi" value="<?php echo htmlspecialchars($order['dia_chi']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="tenTacGia" class="form-label">Ghi Chú</label>
                        <input type="text" class="form-control" name="ghi_chu" value="<?php echo htmlspecialchars($order['ghi_chu']); ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu & Thay Đổi</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>