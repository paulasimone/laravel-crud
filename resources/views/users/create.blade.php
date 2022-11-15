<h1>Create new user</h1>

@include('includes.validation_form')

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
    <input type="password" name="password">
    <button>Save</button>
</form>

<a href="{{ route('users.index') }}">List of users</a>