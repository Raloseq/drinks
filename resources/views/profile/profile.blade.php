@extends('layouts.app')

@section('content')
    @include('shared.avatar')
    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <a href="{{ route('profile.edit') }}" class="btn btn-primary">Change your profile</a>
    <a href="{{ route('home') }}" class="btn-primary btn">Back to main page</a>
@endsection
