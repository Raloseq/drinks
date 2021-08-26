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

    <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('shared.avatar')
        <label for="avatar">Choose avatar...</label>
        <input type="file" class="form-control-file" id="avatar" name="avatar">
        @error('avatar')
        <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
        <label for="name">Name</label>
        <input type="text" value="{{ old('name', $user->name) }}" id="name" name="name" class="input-group-sm"/>
        @error('name')
        <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn-primary btn">Update</button>
    </form>
@endsection
