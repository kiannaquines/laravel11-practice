<x-app-layout>
    <div class="p-5 w-1/2 mx-auto mt-5">
        <div class="flex gap-2">
            <a href="{{ route('users.create') }}" class="flex w-1/2 justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mb-3">Create User</a>
        <a href="{{ route('students.index') }}" class="flex w-1/2 justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mb-3">Students</a>
        </div>
        @if (session('success'))
            <p class="text-emerald-700">{{ session('success') }}</p>
        @endif
        <table class="table-auto border-collapse border border-slate-500 w-full hover:border-collapse">
            <thead>
              <tr>
                <th class="border border-slate-100 p-2 text-slate-700">Fullname</th>
                <th class="border border-slate-100 p-2 text-slate-700">Email Address</th>
                <th class="border border-slate-100 p-2 text-slate-700">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td class="border border-slate-100 p-2 text-slate-500">{{ $user->name }}</td>
                    <td class="border border-slate-100 p-2 text-slate-500">{{ $user->email }}</td>
                    <td class="border border-slate-100 p-2 text-slate-500 text-center">
                        <a href="{{ route('users.show', $user) }}" class="text-slate-500 font-semibold">View</a>
                        <a href="{{ route('users.edit', $user) }}" class="text-slate-500 font-semibold">Edit</a>
                        <form action="{{ route('users.destroy', $user) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="text-slate-500 font-semibold cursor-pointer">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</x-app-layout>