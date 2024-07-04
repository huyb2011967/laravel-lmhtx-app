<!DOCTYPE html>
<html lang="en">

@include('admin.users.head')

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="#" class="h1"><b>Liên Minh HTX</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Đăng nhập để truy cập vào hệ thống!</p>
        @include('admin.users.alert')
        <form action="/admin/users/login/store" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Mật khẩu" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">
                  Ghi nhớ!
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>

        </form>

        <p class="mb-1">
          <a href="forgot-password.html">Tôi quên mật khẩu!</a>
        </p>
        <p class="mb-0">
          <a href="{{ route('register') }}" class="text-center">Đăng kí thành viên!</a>
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->
  @include('admin.users.footer')
</body>

</html>