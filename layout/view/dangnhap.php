<main class="mg-top60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="title-hot">Đăng Nhập</h2>
                <form method="post" action="?act=login">
                    <?php if (isset($error)): ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endif; ?>
                    <div class="form-group mb-3">
                        <label for="registeruserName">Tên đăng nhập</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="registeruserName" placeholder="Nhập tên đăng nhập" name="user">
                            <span class="input-group-text icon-size"><i class="fas fa-user"></i></span>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="loginPassword">Mật Khẩu</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="loginPassword" placeholder="Nhập mật khẩu" name="password">
                            <span class="input-group-text">
                                <i class="fas fa-eye-slash" onclick="togglePassword('loginPassword', this)"></i>
                            </span>
                        </div>
                    </div>
                    <button type="submit" class="button btn-mid">Đăng Nhập</button>
                </form>
            </div>
        </div>
    </div>
</main>
