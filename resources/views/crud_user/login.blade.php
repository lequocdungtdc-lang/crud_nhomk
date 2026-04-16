@extends('dashboard')

@section('content')

    <!-- Form -->
    <div class="container">
        <h2>Màn hình đăng nhập</h2>

        <div class="form-group">
            <label>Username</label>
            <input type="text">
        </div>

        <div class="form-group">
            <label>Mật khẩu</label>
            <input type="password">
        </div>

        <div class="checkbox">
            <input type="checkbox"> Ghi nhớ đăng nhập
        </div>

        <div class="actions">
            <a href="#">Quên mật khẩu</a>
            <button>Đăng nhập</button>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        Lập trình web @01/ 2024
    </div>

@endsection

