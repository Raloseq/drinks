@extends('layouts.app')

@section('content')
    @include('shared.avatar')
    <p>Name: </p>
    <p>Email: </p>
    <a href="{{ url()->previous() }}" class="btn-primary btn">Back</a>
@endsection
