<x-layout>
    <div class="w-1/2 mx-auto mt-5">
        <h2 class="text-2xl">Student Information</h2>
        <div class="mt-5">
            <p class="text-lg">Fullname: {{ $user->name }}</p>
            <p class="text-lg">Email Address: {{ $user->email }}</p>
            <p class="text-lg">Password: {{ $user->password }}</p>
            <div class="flex gap-2 mt-3">
                <a href="{{ route('users.index') }}" class="flex w-1/2 justify-center rounded-md bg-emerald-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-emerald-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-600">Back</a>
            </div>
        </div>
    </div>
</x-layout>
