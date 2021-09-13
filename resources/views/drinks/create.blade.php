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
    <form action="{{ route('drinks.store') }}" method="post" enctype="multipart/form-data" style="width: 50%">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Choose image</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control"/>

            <label for="description">Description</label>
            <textarea type="text" name="description" id="description" class="form-control"></textarea>

            <label for="recipe">Recipe</label>
            <textarea type="text" id="recipe" name="recipe" class="form-control"></textarea>

            <label for="ingredients">Ingredients</label>
            <textarea name="ingredients" id="ingredients" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn-primary btn float-right">Create</button>
    </form>
@endsection
