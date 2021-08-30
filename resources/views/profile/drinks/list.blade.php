@extends('layouts.app')

@section('content')
    <div class="d-flex p-2 flex-wrap">
        @foreach($drinks ?? [] as $drink)
            <div class="card mr-5 mb-5" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('images/drink.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $drink->name }}</h5>
                    <p class="card-text">{{ $drink->description }}</p>
                    <a href="{{ route('drinks.show', ['drink' => $drink->id]) }}" class="btn-primary btn">Details</a>
                    <a href="{{ route('drinks.edit', ['drink' => $drink]) }}" class="btn-primary btn">Edit</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
