@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center text-center">
        @include('shared.avatar')
        <p class="mt-3">Name: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <div class="d-flex justify-content-center">
            <div class="mr-3">
                <p>Added drinks:</p>
                <p>0000000</p>
            </div>
            <div>
                <p>Number of comments:</p>
                <p>0000000</p>
            </div>
        </div>
        <div class="controls">
            <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit profile</a>
            <a href="{{ route('home') }}" class="btn-primary btn">Back to main page</a>
        </div>
    </div>
@endsection
