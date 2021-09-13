@extends('layouts.app')

@section('content')
    <div class="d-flex p-2 flex-wrap justify-content-center">
    @foreach($drinks ?? [] as $drink)
        <div class="card mr-5 mb-5" style="width: 18rem;">
            @include('shared.image')
            <div class="card-body">
                <h5 class="card-title">{{ $drink->name }}</h5>
                <p class="card-text">{{ $drink->description }}</p>
                <a href="{{ route('drinks.show', ['drink' => $drink->id]) }}" class="btn-primary btn">Details</a>
            </div>
            <p class="ml-5">Created by: {{ $drink->author_name }}</p>
        </div>
    @endforeach
    </div>
{{--    <a href="{{ route('drinks.create') }}" class="btn-primary btn">Add drink</a>--}}
@endsection
