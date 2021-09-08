@extends('layouts.app')

@section('content')
    @include('shared.avatar')
    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Created at: {{ $user->created_at }}</p>
    <a href="{{ url()->previous() }}" class="btn-primary btn">Back</a>
@endsection
