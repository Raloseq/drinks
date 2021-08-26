@extends('layouts.app')

@section('content')
    <form action="{{ route('drinks.add') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="avatar">Choose image</label>
        <input type="file" class="form-control-file" id="image" name="image">

        <label for="name">Name</label>
        <input type="text" id="name" name="name" class="input-group-sm"/>

        <label for="description">Description</label>
        <textarea type="text" name="description" id="description" class="input-group-sm"></textarea>

        <label for="recipe">Recipe</label>
        <textarea type="text" id="recipe" name="recipe" class="input-group-sm"></textarea>

        <label for="ingredients">Ingredients</label>
        <textarea name="ingredients" id="ingredients"></textarea>

        <button type="submit" class="btn-primary btn">Create</button>
    </form>
@endsection
