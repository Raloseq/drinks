<nav class="nav">
    <a href="{{ route('home') }}">Main page</a>
    <ul>
        <p>Profile</p>
        <li><a href="{{ route('profile') }}">Profile</a></li>
        <li><a href="{{ route('profile.edit') }}">Edit profile</a></li>
        <p>Drinks</p>
        <li><a href="{{ route('drinks') }}">Drinks</a></li>
        <li><a href="{{ route('drinks.create') }}">Add drink</a></li>
        <p>Ingredients</p>
        <li><a href="{{ route('ingredients') }}">Ingredients</a></li>
    </ul>
</nav>
