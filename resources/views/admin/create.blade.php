@extends('layouts.app')

@section('title', 'Add user')

@section('content')

<div class="text-right">
    <ul class="space-x-2 text-gray-500 text-xs font-mono">
        <a href="{{ url('dashboard') }}">
            <li class="inline hover:text-blue-500">Home </li>
        </a>>
        <a href="{{ route('admin.index') }}">
            <li class="inline text-blue-500">Users </li>
        </a>>
        <li class="inline text-gray-400">Create user</li>
    </ul>
</div>
<div class="bg-gray-50 py-4 rounded-sm px-8 pb-2 flex flex-col my-2">
    <h2 class="my-4 text-gray-800 text-2xl font-bold">Create User</h2>
    <hr class="mb-4">
    <form action="{{ route('admin.store') }}" method="POST" class="mx-4 mb-4">
        @csrf
        <div class="-mx-8 md:flex mb-6">
            <div class="md:w-1/2 px-5 mb-6 md:mb-0">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="first-name">Full
                    name</label>
                <input
                    class="@error('name') bg-red-100 @enderror px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                    type="text" name="name" value="{{ old('name') }}">
                @error('name')
                <p class="mt-2 text-red-600 text-xs">{{ $message}}</p>
                @enderror
            </div>
            <div class="md:w-1/2 px-5">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="email">Email
                </label>
                <input
                    class="@error('email') bg-red-100 @enderror px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                    type="email" value="{{ old('email') }}" name="email">
                @error('email')
                <p class="mt-2 text-red-600 text-xs">{{ $message}}</p>
                @enderror
            </div>
        </div>
        <div class="-mx-8 md:flex mb-6">
            <div class="md:w-1/2 px-5 mb-6 md:mb-0">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="password">Password</label>
                <input
                    class="@error('password') bg-red-100 @enderror px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                    type="password" name="password" value="{{ old('password') }}">
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
        <div class="-mx-8 md:flex mb-6">
            <div class="md:w-1/2 px-5 mb-6 md:mb-0">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="password">Role</label>
                <select disabled
                    class="px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full">
                    <option> Viewer </option>
                </select>
            </div>
        </div>
        <div class="flex -ml-2 mb-2 pt-2">
            <a href="#"
                class="inline-flex items-center px-12 py-2 bg-gray-200 border border-transparent rounded-md text-base text-gray-500 hover:bg-gray-300 focus:outline-none transition ease-in-out duration-150">
                Cancel </a>
            <button type="submit"
                class="inline-flex items-center px-12 py-2 bg-blue-600 border border-transparent rounded-md text-base text-white hover:bg-blue-700 focus:outline-none transition ease-in-out duration-150 ml-6">
                Create user
            </button>
        </div>
    </form>
</div>


@endsection