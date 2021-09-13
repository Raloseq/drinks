@if($drink->image)
    <img src="{{ asset('storage/' . $drink->image) }}" alt="drink-image" class="drink-img">
@else
    <img src="{{ asset('images/drink.jpg') }}" alt="drink-image" class="drink-img">
@endif
