<h1>{{ $user->name }}'s Details</h1>
<ul>
    <li>Name: {{ $user->name }}</li>
    <li>Email: {{ $user->email }}</li>
</ul>

<a href="{{ route('users.index') }}">List of users</a>