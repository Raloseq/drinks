@extends('layouts.app')

@section('content')
    <form action="{{ route('ingredients') }}" class="form-inline">
        @csrf
        <label for="phrase" class="form-label">Phrase</label>
        <input type="text" name="phrase" class="form-control" value="{{ $phrase ?? '' }}">

        <label for="type">Choose a type:</label>
{{--        {{ dd($phrase,$type) }}--}}
        <select id="type" name="type" class="form-select">
            <option @if ($type == 'all') selected @endif value="all">All</option>
            <option @if ($type == 'spirits') selected @endif value="spirits">Spirits</option>
            <option @if ($type == 'liqueurs') selected @endif value="liqueurs">Liqueurs</option>
            <option @if ($type == 'wines&champagnes') selected @endif value="wines&champagnes">Wines&Champagnes</option>
            <option @if ($type == 'beers') selected @endif value="beers">Beers</option>
            <option @if ($type == 'ciders') selected @endif value="ciders">Ciders</option>
            <option @if ($type == 'syrups') selected @endif value="syrups">Syrups</option>
            <option @if ($type == 'softdrinks') selected @endif value="softdrinks">SoftDrinks</option>
            <option @if ($type == 'barstock') selected @endif value="barstock">BarStock</option>
            <option @if ($type == 'fruits') selected @endif value="fruits">Fruits</option>
            <option @if ($type == 'home') selected @endif value="home">Home</option>
        </select>

        <button type="submit" class="btn btn-primary">Search</button>
    </form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Lp</th>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ingredients ?? [] as $ingredient)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $ingredient->name }}</td>
                <td>{{ $ingredient->type }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $ingredients->links() }}
@endsection
