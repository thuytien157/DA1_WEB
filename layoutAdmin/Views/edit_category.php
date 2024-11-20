<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa The Loai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Sửa The Loai</h2>
        <form method="POST" action="index.php?page=update_category">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($categorie['id']); ?>">
            <div class="mb-3">
                <label for="tenTacGia" class="form-label">Tên Tác Giả</label>
                <input type="text" class="form-control" id="tenTacGia" name="ten_tacgia" 
                       value="<?php echo htmlspecialchars($categorie['ten_theloai']); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Lưu Thay Đổi</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
