@extends('admin.users.main')

@section('content')

<form action="{{ route('members.store') }}" method="POST" id="quickForm" novalidate="novalidate">
    @csrf
    <div class="card-body">
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
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Thêm</button>
    </div>
</form>

@endsection