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
    <form action="{{ route('review.store') }}" method="post">
        @csrf
        <label for="headline">Headline</label>
        <input type="text" class="form-control" name="headline" id="headline">
        <label for="description">Description</label>
        <input type="text" class="form-control" name="description" id="description">
        <label for="rating">Rating</label>
        <input type="number" class="form-control" name="rating" id="rating">
        <input type="hidden" value="{{ $drink->id }}" name="drink_id">
        <button type="submit" class="btn-primary btn m-2">Send</button>
    </form>
    @forelse($reviews as $review)
        <div class="flex-column">
            <h2>{{ $review->headline }}</h2>
            <p>{{ $review->description }}</p>
            <p>{{ $review->rating }}</p>
        </div>
    @empty
        <p>There is no any reviews for this drink</p>
    @endforelse
    <a href="{{ route('drinks') }}" class="btn btn-primary">Back</a>
@endsection
