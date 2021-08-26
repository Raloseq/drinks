@if(Auth::user()->avatar)
    <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="user-avatar" class="avatar">
@else
    <img src="{{ asset('images/avatar.png') }}" alt="avatar" class="avatar">
@endif
