<!DOCTYPE html>
<html lang="en">

@include('admin.users.head')

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="#" class="h1"><b>Liên Minh HTX</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Đăng kí thành viên mới!</p>

        <form action="/admin/users/register/store" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Họ tên" name="name" value="{{ old('name') }}" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Mật khẩu" name="password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            @error('password')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Nhập lại mật khẩu" name="password_confirmation" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
              @error('password_confirmation')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree" {{ old('terms') ? 'checked' : '' }} required>
                <label for="agreeTerms">
                  Tôi đồng ý với <a href="#">điều khoản</a>
                </label>
                @error('terms')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <a href="{{ route('login') }}" class="text-center">Trở về đăng nhập</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  @include('admin.users.footer')

</body>

</html>