@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Lp</th>
            <th scope="col">Name</th>
            <th scope="col">Account type</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users ?? [] as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                @if($user->admin)
                    <td>Admin</td>
                @else
                    <td>User</td>
                @endif
                <td>
                    <form action="{{ route('users.destroy', $user->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary btn-danger">Delete account</button>
                    </form>
                    <a href="{{ route('users.show', ['users' => $user->id]) }}" class="btn-primary btn">Details</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
@endsection

