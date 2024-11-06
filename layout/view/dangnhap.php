<main class="mg-top60">
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <h2 class="title-hot">Đăng Nhập</h2>
            <form>
              <div class="form-group mb-3">
                <label for="loginEmail">Email</label>
                <div class="input-group">
                  <input type="email" class="form-control" id="loginEmail" placeholder="Nhập email">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
              </div>
              <div class="form-group mb-3">
                <label for="loginPassword">Mật Khẩu</label>
                <div class="input-group">
                  <input type="password" class="form-control" id="loginPassword" placeholder="Nhập mật khẩu">
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