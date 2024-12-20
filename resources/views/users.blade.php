<h1>Users List</h1>

@foreach ($users as $user)
<li>{{ $user->name }} - {{ $user->email }} <a href="{{ route('users.edit',['id' => $user->id]) }}">Edit</a> | <a href="{{ route('users.destroy',['id' => $user->id]) }}">Delete</a></li>
@endforeach