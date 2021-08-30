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
    <form action="{{ route('drinks.update', ['drink' => $drink]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="avatar">Choose image</label>
        <input type="file" class="form-control-file" id="image" name="image">

        <label for="name">Name</label>
        <input type="text" id="name" name="name" class="input-group-sm" value="{{ $drink->name }}">

        <label for="description">Description</label>
        <textarea type="text" name="description" id="description" class="input-group-sm" >{{ $drink->description }}</textarea>

        <label for="recipe">Recipe</label>
        <textarea type="text" id="recipe" name="recipe" class="input-group-sm">{{ $drink->recipe }}</textarea>

        <label for="ingredients">Ingredients</label>
        <textarea name="ingredients" id="ingredients">{{ $drink->ingredients }}</textarea>

        <button type="submit" class="btn-primary btn">Create</button>
    </form>
@endsection
