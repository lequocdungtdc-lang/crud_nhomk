@extends('dashboard')

        @section('content')

    <!-- Nội dung -->
   <div class="container">
        <h2>Màn hình chi tiết</h2>

        <div class="detail">
            <p><strong>Username:</strong> {{ $messi->name }}</p>
            <p><strong>Email:</strong> {{ $messi->email }}</p>
        </div>

        <a href="#" class="btn-primary">Chỉnh sửa</a>
    </div>

    <!-- Footer -->
    <div class="footer">
        Lập trình web @01/2024
    </div>

    @endsection