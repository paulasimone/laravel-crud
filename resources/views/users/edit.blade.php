<h1>Editing user {{ $user->name }}</h1>
<form action="{{ route('users.update', $user->id) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Name" value="{{ $user->name }}">
    <input type="email" name="email" placeholder="Email" value="{{ $user->email }}">
    <input type="password" name="password">
    <button>Save</button>
</form>

<a href="{{ route('users.index') }}">List of users</a>