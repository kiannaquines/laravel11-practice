<h1>Student List</h1>


@foreach ($students as $student)
<li>{{ $student->name }} - {{ $student->email }} - {{ $student->student_id }} <a href="">Edit</a> | <a href="">Delete</a></li>
@endforeach