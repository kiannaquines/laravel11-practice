<h1>Student List</h1>


@foreach ($students as $student)
<li>{{ $student->name }} - {{ $student->email }} - {{ $student->student_id }} <a href="{{ route('student.index', ['id' => $student->id]) }}">Edit</a> | <a href="{{ route('student.destroy',['id' => $student->id]) }}">Delete</a></li>
@endforeach