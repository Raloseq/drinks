@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center text-center">
        @include('shared.avatar')
        <p class="mt-3">Name: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <div class="d-flex justify-content-center">
            <div class="mr-3">
                <p>Drinks:</p>
                <p>0000000</p>
            </div>
            <div>
                <p>Comments:</p>
                <p>0000000</p>
            </div>
        </div>
        <p>Created at: {{ $user->created_at }}</p>
        <div class="d-flex">
            <a href="{{ url()->previous() }}" class="btn-primary btn mr-3">Back</a>
            <a href="{{ route('home') }}" class="btn-primary btn">Back to main page</a>
        </div>
    </div>
@endsection
