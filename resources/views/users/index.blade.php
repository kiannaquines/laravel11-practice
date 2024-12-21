<div>
    <a href="{{ route('users.create') }}">Create Student</a>
    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }} <a href="">Edit</a> <a href="">Delete</a> </li>
        @endforeach
    </ul>
</div>
