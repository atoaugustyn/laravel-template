@extends('layouts.app')

@section('title', 'Create vessel')

@section('content')

<div class="text-right breadcrumb font-bold">
    <ul class="space-x-2 text-gray-500 text-xs">
        <a href="{{ url('dashboard') }}">
            <li class="inline hover:text-blue-500">Home </li>
        </a>>
        <a href="{{ route('vessel.index') }}">
            <li class="inline text-blue-500">Vessels </li>
        </a>>
        <li class="inline text-gray-400">Create vessel</li>
    </ul>
</div>
<div class="bg-gray-50 py-4 rounded-md border px-8 pb-2 flex flex-col my-2">
    <a href="{{ route('vessel.index') }}" class="text-xs text-blue-500 underline">Go back</a>
    <h2 class="my-4 text-gray-800 text-2xl font-bold">Create Vessel</h2>
    <hr class="mb-4">
    <form action="{{ route('vessel.store') }}" method="POST" class="mx-4 mb-4">
        @csrf
        <div class="-mx-8 mb-6">
            <div class="w-full px-5 mb-6 md:mb-0">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="Name">
                    Name</label>
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
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="Vessel type">Vessel type</label>
                <input
                    class="@error('vessel_type') bg-red-100 @enderror px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                    type="text" name="vessel_type" value="{{ old('vessel_type') }}">
                @error('vessel_type')
                <p class="mt-2 text-red-600 text-xs">{{ $message}}</p>
                @enderror
            </div>
            <div class="md:w-1/2 px-5 mb-6 md:mb-0">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="Flag">Flag</label>
                <input
                    class="@error('flag') bg-red-100 @enderror px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                    type="text" name="flag" value="{{ old('flag') }}">
                @error('flag')
                <p class="mt-2 text-red-600 text-xs">{{ $message}}</p>
                @enderror
            </div>
        </div>
        <div class="-mx-8 md:flex mb-6">
            <div class="md:w-1/2 px-5 mb-6 md:mb-0">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="Port of registration">Port of registration</label>
                <input
                    class="@error('port_of_registration') bg-red-100 @enderror px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                    type="text" name="port_of_registration" value="{{ old('port_of_registration') }}">
                @error('port_of_registration')
                <p class="mt-2 text-red-600 text-xs">{{ $message}}</p>
                @enderror
            </div>
            <div class="md:w-1/2 px-5 mb-6 md:mb-0">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="Gross tonnage">Gross tonnage</label>
                <input
                    class="@error('gross_tonnage') bg-red-100 @enderror px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                    type="text" name="gross_tonnage" value="{{ old('gross_tonnage') }}">
                @error('gross_tonnage')
                <p class="mt-2 text-red-600 text-xs">{{ $message}}</p>
                @enderror
            </div>
        </div>
        <div class="-mx-8 md:flex mb-6">
            <div class="md:w-1/2 px-5 mb-6 md:mb-0">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="Call sign">Call sign</label>
                <input
                    class="@error('call_sign') bg-red-100 @enderror px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                    type="text" name="call_sign" value="{{ old('call_sign') }}">
                @error('call_sign')
                <p class="mt-2 text-red-600 text-xs">{{ $message}}</p>
                @enderror
            </div>
            <div class="md:w-1/2 px-5 mb-6 md:mb-0">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="Name address owner">Name address owner</label>
                <input
                    class="@error('name_address_owner') bg-red-100 @enderror px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                    type="text" name="name_address_owner" value="{{ old('name_address_owner') }}">
                @error('name_address_owner')
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
                Create vessel
            </button>
        </div>
    </form>
</div>

@endsection
