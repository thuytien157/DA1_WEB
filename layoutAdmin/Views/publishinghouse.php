<div class="container">
    <h2>Danh sách nhà xuất bản</h2>
    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPublishingHouseModal">Thêm nhà xuất bản</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên nhà xuất bản</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($publishinghouses)): ?>
                <?php foreach ($publishinghouses as $publishinghouse): ?>
                    <tr>
                        <td><?= htmlspecialchars($publishinghouse['id']); ?></td>
                        <td><?= htmlspecialchars($publishinghouse['ten_nhaxuatban']); ?></td>
                        <td>
                            <a href="index.php?page=edit_publishinghouse&id=<?= $publishinghouse['id']; ?>" class="btn btn-warning">Sửa</a>
                            <a href="index.php?page=delete_publishinghouse&id=<?= $publishinghouse['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">Không có nhà xuất bản nào.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<!-- Modal thêm nhà xuất bản -->
<div class="modal fade" id="addPublishingHouseModal" tabindex="-1" aria-labelledby="addPublishingHouseModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="index.php?page=add_publishinghouse">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addPublishingHouseModalLabel">Thêm Nhà Xuất Bản</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="ten_nhaxuatban" class="form-label">Tên nhà xuất bản</label>
                        <input type="text" class="form-control" id="ten_nhaxuatban" name="ten_nhaxuatban" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
            </div>
        </form>
    </div>
</div>
