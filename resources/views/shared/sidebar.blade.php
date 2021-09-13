<nav class="nav">
    <a href="{{ route('home') }}">Main page</a>
    <ul>
        <p>Profile</p>
        <li><a href="{{ route('profile') }}">Profile</a></li>
        <li><a href="{{ route('profile.edit') }}">Edit profile</a></li>
        <li><a href="{{ route('profile.drinks') }}">My drinks</a></li>
        <p>Drinks</p>
        <li><a href="{{ route('drinks') }}">Drinks</a></li>
        <li><a href="{{ route('drinks.create') }}">Add drink</a></li>
        <p>Ingredients</p>
        <li><a href="{{ route('ingredients') }}">Ingredients</a></li>
        @can('admin')
        <p>Users</p>
        <li><a href="{{ route('users') }}">Users</a></li>
        @endcan
    </ul>
</nav>
