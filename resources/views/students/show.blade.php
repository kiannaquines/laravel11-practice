<x-app-layout>
    <div class="w-1/2 mx-auto mt-5 bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
        <h2 class="text-1xl">Student Information</h2>
        <div class="mt-5">
            <p class="text-md">Fullname: {{ $student->name }}</p>
            <p class="text-md">Email Address: {{ $student->email }}</p>
            <p class="text-md">Student ID: {{ $student->student_id }}</p>
            <div class="flex gap-2 mt-3">
                <a href="{{ route('students.index') }}" class="flex w-1/2 justify-center rounded-md bg-emerald-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-emerald-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-600">Back</a>
            </div>
        </div>
    </div>
</x-app-layout>
