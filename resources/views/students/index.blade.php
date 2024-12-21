<x-app-layout>
    <div class="p-5 w-1/2 mx-auto mt-5 bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="flex gap-2">
            <a href="{{ route('students.create') }}" class="flex w-1/2 justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mb-3">Create Student</a>

            <a href="{{ route('users.index') }}" class="flex w-1/2 justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mb-3">Users</a>
    
        </div>
        @if (session('success'))
            <p class="text-emerald-700">{{ session('success') }}</p>
        @endif

        <table class="table-auto border-collapse border border-slate-500 w-full hover:border-collapse">
            <thead>
              <tr>
                <th class="border border-slate-100 p-2 text-slate-700">Fullname</th>
                <th class="border border-slate-100 p-2 text-slate-700">Email Address</th>
                <th class="border border-slate-100 p-2 text-slate-700">Student ID</th>
                <th class="border border-slate-100 p-2 text-slate-700">Actions</th>
              </tr>
            </thead>
            <tbody>
                @if ($students->count() > 0)
                @foreach($students as $student)
                <tr>
                    <td class="border border-slate-100 p-2 text-slate-500">{{ $student->name }}</td>
                    <td class="border border-slate-100 p-2 text-slate-500">{{ $student->email }}</td>
                    <td class="border border-slate-100 p-2 text-slate-500">{{ $student->student_id }}</td>
                    <td class="border border-slate-100 p-2 text-slate-500 text-center">
                        <a href="{{ route('students.show', $student) }}" class="text-neutral-500 font-semibold">View</a>
                        <a href="{{ route('students.edit', $student) }}" class="text-neutral-500 font-semibold">Edit</a>
                        <form action="{{ route('students.destroy', $student) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="text-slate-500 font-semibold cursor-pointer">
                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td class="border border-slate-100 p-2 text-slate-500 text-center" colspan="4">No students found</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
    
</x-app-layout>