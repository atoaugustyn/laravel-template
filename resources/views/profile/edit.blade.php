@extends('layouts.app')

@section('title', 'Edit your profile')

@section('content')

<div class="text-right">
    <ul class="space-x-2 text-gray-500 text-xs font-mono">
        <a href="{{ url('dashboard') }}">
            <li class="inline hover:text-blue-500">Home </li>
        </a>>
        <a href="{{ route('admin.index') }}">
            <li class="inline text-blue-500">Users </li>
        </a>>
        <li class="inline text-gray-400">Edit profile</li>
    </ul>
</div>
<div class="bg-gray-50 py-4 rounded-md border px-8 pb-2 flex flex-col my-2">
    <h2 class="my-4 text-gray-800 text-2xl font-bold">Update Your Profile</h2>
    <hr class="mb-4">
    <form action="{{ route('user-profile-information.update') }}" method="POST" class="mx-4 mb-4">
        @csrf
        @method('PUT')
        <div class="-mx-8 md:flex mb-6">
            <div class="md:w-1/2 px-5 mb-6 md:mb-0">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="first-name">Full
                    name</label>
                <input
                    class="@error('name') bg-red-100 @enderror px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                    type="text" name="name" value="{{ $user->name }}">
                @error('name')
                <p class="mt-2 text-red-600 text-xs">{{ $message}}</p>
                @enderror
            </div>
            <div class="md:w-1/2 px-5">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="email">Email
                </label>
                <input
                    class="@error('email') bg-red-100 @enderror px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                    type="email" value="{{  $user->email }}" name="email">
                @error('email')
                <p class="mt-2 text-red-600 text-xs">{{ $message}}</p>
                @enderror
            </div>
        </div>
        <div class="flex -ml-2 mb-2 pt-2">
            <button type="submit"
                class="inline-flex items-center px-10 py-2 bg-blue-600 border border-transparent rounded-md text-base text-white hover:bg-blue-700 focus:outline-none transition ease-in-out duration-150">
                Save
            </button>
        </div>
    </form>
</div>

<div class="bg-gray-50 py-6 rounded-md border px-8 pb-2 flex flex-col my-4">
    <h2 class="text-gray-800 text-2xl font-bold">Update Your Password</h2>
    <form action="{{ route('user-password.update') }}" method="POST" class="mx-4 my-4">
        @csrf
        @method('PUT')
        <div class="-mx-8 md:flex mb-6">
            <div class="md:w-1/2 px-5 mb-6 md:mb-0">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="password">Current password</label>
                <input
                    class="@error('current_password') bg-red-100 @enderror px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                    type="password" name="current_password">
                @error('current_password')
                <p class="mt-2 text-red-600 text-xs">{{ $message}}</p>
                @enderror
            </div>
            <div class="md:w-1/2 px-5 mb-6 md:mb-0">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="password">New password</label>
                <input
                    class="@error('password') bg-red-100 @enderror px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                    type="password" name="password">
                @error('password')
                <p class="mt-2 text-red-600 text-xs">{{ $message}}</p>
                @enderror
            </div>
            <div class="md:w-1/2 px-5">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="confirm-password">Confirm password
                </label>
                <input
                    class="px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                    type="password" name="password_confirmation">
            </div>
        </div>
        <div class="flex -ml-2 mb-2 pt-2">
            <button type="submit"
                class="inline-flex items-center px-10 py-2 bg-blue-600 border border-transparent rounded-md text-base text-white hover:bg-blue-700 focus:outline-none transition ease-in-out duration-150">
                Save
            </button>
        </div>
    </form>
</div>
@endsection
