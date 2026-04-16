@extends('dashboard')

@section('content')

    <!-- Form -->
    <div class="container">
        <h2>Màn hình đăng ký</h2>

        <form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group">
        <label>Username</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus>
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label>Mật khẩu</label>
        <input type="password" id="password" name="password" required>
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>Nhập lại mật khẩu</label>
        <input type="password" name="password_confirmation" required>
        @error('password_confirmation')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="actions">
        <a href="{{ route('login') }}">Đã có tài khoản</a>
        <button type="submit" class="btn btn-primary">Đăng ký</button>
    </div>
</form>
    <!-- Footer -->
    <div class="footer">
        Lập trình web @01/2024
    </div>

@endsection