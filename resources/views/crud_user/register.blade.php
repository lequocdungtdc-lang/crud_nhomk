@extends('dashboard')

@section('content')

    <!-- Form -->
    <div class="container">
        <h2>Màn hình đăng ký</h2>

        <div class="form-group">
            <label>Username</label>
            <input type="text">
        </div>

        <div class="form-group">
            <label>Mật khẩu</label>
            <input type="password">
        </div>

        <div class="form-group">
            <label>Nhập lại mật khẩu</label>
            <input type="password">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email">
        </div>

        <div class="actions">
            <a href="{{ route('login') }}">Đã có tài khoản</a>
            <button>Đăng ký</button>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        Lập trình web @01/2024
    </div>

@endsection