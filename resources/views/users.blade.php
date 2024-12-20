<h1>Users List</h1>

@foreach ($users as $user)
<li>{{ $user->name }} - {{ $user->email }} <a href="">Edit</a> | <a href="">Delete</a></li>
@endforeach