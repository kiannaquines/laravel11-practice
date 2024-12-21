<x-layout>
    <div class="p-5 w-1/2 mx-auto mt-5">
        <a href="{{ route('users.create') }}" class="flex w-1/2 justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mb-3">Create Student</a>
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
                @foreach($students as $student)
                <tr>
                    <td class="border border-slate-100 p-2 text-slate-500">{{ $student->name }}</td>
                    <td class="border border-slate-100 p-2 text-slate-500">{{ $student->email }}</td>
                    <td class="border border-slate-100 p-2 text-slate-500">{{ $student->student_id }}</td>
                    <td class="border border-slate-100 p-2 text-slate-500">
                        <a href="" class="text-neutral-500 font-semibold">Edit</a>
                        <a href="" class="text-slate-500 font-semibold">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</x-layout>