<h1>List of users ( <a href="{{ route('users.create') }}">+</a> )</h1>

<ul>
    @foreach ($users as $user)
        <li>{{ $user->name }} - {{ $user->email }}
             | <a href="{{ route('users.show', $user->id) }}">View</a>
             | <a href="{{ route('users.edit', $user->id) }}">Edit</a>
             | <a href="{{ route('users.destroy', $user->id) }}">Delete</a> </li>
    @endforeach
</ul>