<main class="mg-top60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="title-hot">Đổi Mật Khẩu</h2>

                <!-- Hiển thị thông báo nếu có -->
                <?php if (isset($_SESSION['thongbao'])): ?>
                    <div class="alert alert-info">
                        <?php echo $_SESSION['thongbao']; ?>
                        <?php unset($_SESSION['thongbao']); ?>
                    </div>
                <?php endif; ?>

                <form method="POST">
                    <div class="form-group mb-3">
                        <label for="currentPassword">Mật Khẩu Hiện Tại</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="currentPassword" name="currentPassword" placeholder="Nhập mật khẩu hiện tại" required>
                            <span class="input-group-text">
                                <i class="fas fa-eye-slash" onclick="togglePassword('currentPassword', this)"></i>
                            </span>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="newPassword">Mật Khẩu Mới</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="Nhập mật khẩu mới" required>
                            <span class="input-group-text">
                                <i class="fas fa-eye-slash" onclick="togglePassword('newPassword', this)"></i>
                            </span>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="confirmNewPassword">Xác Nhận Mật Khẩu Mới</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="confirmNewPassword" name="confirmNewPassword" placeholder="Xác nhận mật khẩu mới" required>
                            <span class="input-group-text">
                                <i class="fas fa-eye-slash" onclick="togglePassword('confirmNewPassword', this)"></i>
                            </span>
                        </div>
                    </div>

                    <button type="submit" class="button btn-mid">Đổi Mật Khẩu</button>
                </form>
            </div>
        </div>
    </div>
</main>
