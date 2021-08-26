@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Lp</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Recipe</th>
            <th scope="col">Ingredients</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td>{{ $drink->name }}</td>
                <td>{{ $drink->description }}</td>
                <td>{{ $drink->recipe }}</td>
                <td>{{ $drink->ingredients }}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
@endsection
