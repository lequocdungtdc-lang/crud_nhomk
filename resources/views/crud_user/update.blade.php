@extends('dashboard')
<!---->
<!---->
<!--update-->
<!---->

@section('content')

    <!-- Form -->
    <div class="container">
        <h2>Màn hình cập nhật</h2>

        <form method="POST" action="{{ route('user.postUpdateUser') }}">
            @csrf

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="name" value="{{ old('name', $user->name) }}" required>
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label>Mật khẩu (để trống nếu không đổi)</label>
                <input type="password" name="password">
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label>Nhập lại mật khẩu</label>
                <input type="password" name="password_confirmation">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email', $user->email) }}" required>
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <input type="hidden" name="id" value="{{ $user->id }}"></input>

            <div class="actions">
                <a href="{{ route('user.list') }}">Quay lại</a>
                <button type="submit">Cập nhật</button>
            </div>
        </form>
    </div>
    <div class="footer">
        Lập trình web @01/ 2024
    </div>
@endsection
