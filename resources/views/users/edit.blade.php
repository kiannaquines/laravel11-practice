<x-app-layout>
    <div class="w-1/2 mx-auto mt-5 bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
        <h2 class="text-2xl">Update User</h2>

        @if ($errors->any())
            <div class="mb-4 text-red-600">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('users.update', $user) }}" method="POST" class="mt-5">
            @csrf
            @method('PUT')
            <x-text-input type="text" name="name" id="name" placeholder="Name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 mb-2 mt-2" value="{{ old('name', $user->name) }}" required></x-text-input>
            <x-text-input type="email" name="email" id="email" placeholder="Email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 mb-2" value="{{ old('email', $user->email) }}" required></x-text-input>
            <x-text-input type="password" name="password" id="password" placeholder="Password" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 mb-2"></x-text-input>
            <x-text-input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 mb-2"></x-text-input>

            <div class="flex gap-2">
                <input type="submit" value="Update User" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 cursor-pointer">
                <a href="{{ route('users.index') }}" class="flex w-full justify-center rounded-md bg-emerald-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-emerald-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-600">Back</a>
            </div>
        </form>
    </div>    
</x-app-layout>