<h1>Create new user</h1>
<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password">
    <button>Save</button>
</form>

<a href="{{ route('users.index') }}">List of users</a>