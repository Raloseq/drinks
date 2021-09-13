@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column">
        <div style="width: 18rem;">
            @include('shared.image')
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Recipe</th>
                <th scope="col">Ingredients</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $drink->name }}</td>
                <td>{{ $drink->description }}</td>
                <td>{{ $drink->recipe }}</td>
                <td>{{ $drink->ingredients }}</td>
            </tr>
            </tbody>
        </table>
        <h3>Write review</h3>
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
            <div class="flex-column border p-3 mb-3">
                <div class="d-flex">
                    <h2 class="pr-5">{{ $review->headline }}</h2>
                    <h2>Rating: {{ $review->rating }}/10</h2>
                </div>
                <p>{{ $review->description }}</p>
                <p>Created at: {{ $review->created_at }}</p>
            </div>
        @empty
            <p>There is no any reviews for this drink</p>
        @endforelse
        {{--    <a href="{{ route('drinks') }}" class="btn btn-primary">Back</a>--}}
        <a href="{{ url()->previous() }}" class="btn-primary btn" style="width: 10%">Back</a>
    </div>
@endsection
