<x-app-layout>
    <div class="w-1/2 mx-auto mt-5 bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
        <h2 class="text-2xl">Update Student</h2>
        <form action="{{ route('students.update', $student) }}" method="POST" class="mt-5">
            @method('PUT')
            @csrf
            <x-text-input type="text" name="name" id="name" placeholder="Name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 mb-2 mt-2" value="{{ old('name', $student->name) }}" required></x-text-input>
            <x-text-input type="text" name="email" id="email" placeholder="Email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 mb-2" value="{{ old('email', $student->email) }}" required></x-text-input>
            <x-text-input type="text" name="student_id" id="student_id" placeholder="Student ID" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 mb-2" value="{{ old('student_id', $student->student_id) }}" required></x-text-input>
            <input type="submit" value="Update" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 cursor-pointer">
        </form>
    </div>    
</x-app-layout>