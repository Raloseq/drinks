@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        <form action="{{ route('drinks.update', ['drink' => $drink]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="avatar">Choose image</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $drink->name }}">

                <label for="description">Description</label>
                <textarea type="text" name="description" id="description" class="form-control" rows="3">{{ $drink->description }}</textarea>

                <label for="recipe">Recipe</label>
                <textarea type="text" id="recipe" name="recipe" class="form-control" rows="3">{{ $drink->recipe }}</textarea>

                <label for="ingredients">Ingredients</label>
                <textarea name="ingredients" id="ingredients" class="form-control" rows="3">{{ $drink->ingredients }}</textarea>
            </div>
            <button type="submit" class="btn-primary btn">Create</button>
        </form>
        <a href="{{ url()->previous() }}" class="btn-primary btn mt-3">Back</a>
    </div>
@endsection
