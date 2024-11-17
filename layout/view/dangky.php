<main class="mg-top60">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="title-hot">Đăng Ký</h2>
            <form method="post">
            <div class="form-group mb-3">
                <label for="registerName">Họ và Tên</label>
                <div class="input-group">
                <input type="text" class="form-control" id="registerName" placeholder="Nhập họ và tên">
                <span class="input-group-text icon-size"><i class="fas fa-user"></i></span>
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="registeruserName">Tên đăng nhập</label>
                <div class="input-group">
                <input type="text" class="form-control" id="registeruserName" placeholder="Nhập họ và tên">
                <span class="input-group-text icon-size"><i class="fas fa-user"></i></span>
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="registerEmail">Email</label>
                <div class="input-group">
                <input type="email" class="form-control" id="registerEmail" placeholder="Nhập email">
                <span class="input-group-text icon-size"><i class="fas fa-envelope"></i></span>
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="registerphone">Phone</label>
                <div class="input-group">
                <input type="text" class="form-control" id="registerphone" placeholder="Nhập số điện thoại">
                <span class="input-group-text icon-size"><i class="fa-solid fa-phone"></i></span>
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="registerPassword">Mật Khẩu</label>
                <div class="input-group">
                <input type="password" class="form-control" id="registerPassword" placeholder="Nhập mật khẩu">
                <span class="input-group-text icon-size no-bgc">
                    <i class="fa fa-eye-slash" onclick="togglePassword('registerPassword', this)"></i>
                </span>
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="registerrePassword">Xác Nhận Mật Khẩu</label>
                <div class="input-group">
                <input type="password" class="form-control" id="registerrePassword" placeholder="Nhập mật khẩu">
                <span class="input-group-text icon-size no-bgc">
                    <i class="fa fa-eye-slash" onclick="togglerePassword('registerrePassword', this)"></i>
                </span>
                </div>
            </div>
            <button type="submit" class="button btn-mid">Đăng Ký</button>
            </form>
        </div>
        </div>
    </div>
</main>