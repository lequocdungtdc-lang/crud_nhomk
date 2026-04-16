@extends('dashboard')

@section('content')

    <!-- Nội dung -->
    <div class="container">
        <h2>Danh sách user</h2>

        <table class="user-table">
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Email</th>
                <th>Thao tác</th>
            </tr>

            @foreach($users as $key => $user)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a> |
                        <a href="{{ route('user.readUser', ['id' => $user->id]) }}">View</a> |
                        <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>

        <!-- Pagination -->
        <div class="pagination">
            <button>Previous</button>
            <button>1</button>
            <button>2</button>
            <button>3</button>
            <button>Next</button>
        </div>
    </div>
    <!-- Footer -->
    <div class="footer">
        Lập trình web @01/2024
    </div>

@endsection
