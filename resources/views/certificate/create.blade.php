@extends('layouts.app')

@section('title', 'Add certificate')

@section('content')

<div class="text-right breadcrumb font-bold">
    <ul class="space-x-2 text-gray-500 text-xs">
        <a href="{{ url('dashboard') }}">
            <li class="inline hover:text-blue-500">Home </li>
        </a>>
        <a href="{{ route('certificate.index') }}">
            <li class="inline text-blue-500"> Certificates </li>
        </a>>
        <li class="inline text-gray-400">Add certificate</li>
    </ul>
</div>
<div class="bg-gray-50 py-4 rounded-md border px-8 pb-2 flex flex-col my-2">
    <h2 class="my-4 text-gray-800 text-2xl font-bold">Add Certificate</h2>
    <hr class="mb-4">
    <form action="{{ route('certificate.store') }}" method="POST" class="mx-4 mb-4">
        @csrf
        <div class="-mx-8 md:flex mb-6">
            <div class="md:w-1/2 px-5">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="Company">Company
                </label>
                <select name="vessel_id" class="@error('vessel_id') bg-red-100 @enderror px-2 py-2.5 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                value="{{ old('vessel_id') }}" >
                    <option>Please select</option>
                    @foreach ($vessels as $vessel)
                        <option value="{{ $vessel->id }}"><?php echo (old('vessel_id') == $vessel->id)? 'selected' : '' ?> {{ $vessel->name }} </option>
                    @endforeach
                </select>
                @error('vessel_id')
                <p class="mt-2 text-red-600 text-xs">{{ $message}}</p>
                @enderror
            </div>
            <div class="md:w-1/2 px-5 mb-6 md:mb-0">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="Name">Name of certificate</label>
                <input
                    class="@error('name') bg-red-100 @enderror px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                    type="text" name="name" value="{{ old('name') }}">
                @error('name')
                <p class="mt-2 text-red-600 text-xs">{{ $message}}</p>
                @enderror
            </div>
        </div>
        <div class="-mx-8 md:flex mb-6">
            <div class="md:w-1/2 px-5 mb-6 md:mb-0">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="Date of issue">Date of issue</label>
                <input
                    class="@error('issue_date') bg-red-100 @enderror px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                    type="date" name="issue_date" value="{{ old('issue_date') }}">
                @error('issue_date')
                <p class="mt-2 text-red-600 text-xs">{{ $message}}</p>
                @enderror
            </div>
            <div class="md:w-1/2 px-5">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="Date of expiry">Date of expiry
                </label>
                <input
                class="@error('expiry_date') bg-red-100 @enderror px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                type="date" name="expiry_date" value="{{ old('expiry_date') }}">
            @error('expiry_date')
            <p class="mt-2 text-red-600 text-xs">{{ $message}}</p>
            @enderror
            </div>
        </div>
        <div class="flex -ml-2 mb-2 pt-2">
            <a href="#"
                class="inline-flex items-center px-10 py-2 bg-gray-200 border border-transparent rounded-md text-base text-gray-500 hover:bg-gray-300 focus:outline-none transition ease-in-out duration-150">
                Cancel </a>
            <button type="submit"
                class="inline-flex items-center px-10 py-2 bg-blue-600 border border-transparent rounded-md text-base text-white hover:bg-blue-700 focus:outline-none transition ease-in-out duration-150 ml-6">
                Add certificate
            </button>
        </div>
    </form>
</div>

@endsection
