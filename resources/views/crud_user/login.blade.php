@extends('dashboard')

@section('content')

    <!-- Form -->
   <div class="container">
        <h2>Màn hình đăng nhập</h2>

        <form method="POST" action="{{ route('user.authUser') }}">
            @csrf

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label>Mật khẩu</label>
                <input type="password" name="password" required>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="checkbox">
                <input type="checkbox" name="remember"> Ghi nhớ đăng nhập
            </div>

            <div class="actions">
                <a href="#">Quên mật khẩu</a>
                <button type="submit">Đăng nhập</button>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <div class="footer">
        Lập trình web @01/ 2024
    </div>

@endsection

