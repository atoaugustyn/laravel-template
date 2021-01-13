@extends('layouts.app')

@section('title', 'Add permit')

@section('content')

<div class="text-right">
    <ul class="space-x-2 text-gray-500 text-xs">
        <a href="{{ url('dashboard') }}">
            <li class="inline hover:text-blue-500">Home </li>
        </a>>
        <a href="{{ route('admin.index') }}">
            <li class="inline text-blue-500"> Permits </li>
        </a>>
        <li class="inline text-gray-400">Add permit</li>
    </ul>
</div>
<div class="bg-gray-50 py-4 rounded-md border px-8 pb-2 flex flex-col my-2">
    <h2 class="my-4 text-gray-800 text-2xl font-bold">Add Permit</h2>
    <hr class="mb-4">
    <form action="{{ route('permit.store') }}" method="POST" class="mx-4 mb-4">
        @csrf
        <div class="-mx-8 md:flex mb-6">
            <div class="md:w-1/2 px-5">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="Company">Company
                </label>
                <select name="company_id" class="@error('company_id') bg-red-100 @enderror px-2 py-2.5 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                value="{{ old('company_id') }}" >
                    <option>Please select</option>
                    @foreach ($companies as $company)
                        <option value="{{ $company->id }}"><?php echo (old('company_id') == $company->id)? 'selected' : '' ?> {{ $company->name }} </option>
                    @endforeach
                </select>
                @error('company_id')
                <p class="mt-2 text-red-600 text-xs">{{ $message}}</p>
                @enderror
            </div>
            <div class="md:w-1/2 px-5">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="Permit type">Permit unit
                </label>
                <select name="permit_unit_id" class="@error('permit_unit_id') bg-red-100 @enderror px-2 py-2.5 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                value="{{ old('permit_unit_id') }}" >
                    <option>Please select</option>
                    @foreach ($permitUnits as $permitUnit)
                        <option value="{{ $permitUnit->id }}"><?php echo (old('permit_unit_id') == $permitUnit->id)? 'selected' : '' ?> {{ $permitUnit->name }} </option>
                    @endforeach
                </select>
                @error('permit_unit_id')
                <p class="mt-2 text-red-600 text-xs">{{ $message}}</p>
                @enderror
            </div>
        </div>
        <div class="-mx-8 md:flex mb-6">
            <div class="md:w-1/2 px-5 mb-6 md:mb-0">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="Name of vessel">Name of vessel</label>
                <input
                    class="@error('name_of_vessel') bg-red-100 @enderror px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                    type="text" name="name_of_vessel" value="{{ old('name_of_vessel') }}">
                @error('name_of_vessel')
                <p class="mt-2 text-red-600 text-xs">{{ $message}}</p>
                @enderror
            </div>
            <div class="md:w-1/2 px-5">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="Permit number">Permit number
                </label>
                <input
                class="@error('permit_number') bg-red-100 @enderror px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                type="text" name="permit_number" value="{{ old('permit_number') }}">
            @error('permit_number')
            <p class="mt-2 text-red-600 text-xs">{{ $message}}</p>
            @enderror
            </div>
        </div>
        <div class="-mx-8 md:flex mb-6">
            <div class="md:w-1/2 px-5 mb-6 md:mb-0">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="Port of registry">Port of registry</label>
                <input
                    class="@error('port_of_registry') bg-red-100 @enderror px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                    type="text" name="port_of_registry" value="{{ old('port_of_registry') }}">
                @error('port_of_registry')
                <p class="mt-2 text-red-600 text-xs">{{ $message}}</p>
                @enderror
            </div>
            <div class="md:w-1/2 px-5">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="Gross tonnage">Gross tonnage
                </label>
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
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="IMO number">IMO number</label>
                <input
                    class="@error('imo_number') bg-red-100 @enderror px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                    type="text" name="imo_number" value="{{ old('imo_number') }}">
                @error('imo_number')
                <p class="mt-2 text-red-600 text-xs">{{ $message}}</p>
                @enderror
            </div>
            <div class="md:w-1/2 px-5">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="Call sign">Call sign
                </label>
                <input
                    class="@error('call_sign') bg-red-100 @enderror px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                    type="text" name="call_sign" value="{{ old('call_sign') }}">
                @error('call_sign')
                <p class="mt-2 text-red-600 text-xs">{{ $message}}</p>
                @enderror
            </div>
        </div>
        <div class="-mx-8 md:flex mb-6">
            <div class="md:w-1/2 px-5 mb-6 md:mb-0">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="Date of issue">Date of issue</label>
                <input
                    class="@error('date_of_issue') bg-red-100 @enderror px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                    type="date" name="date_of_issue" value="{{ old('date_of_issue') }}">
                @error('date_of_issue')
                <p class="mt-2 text-red-600 text-xs">{{ $message}}</p>
                @enderror
            </div>
            <div class="md:w-1/2 px-5">
                <label class="block tracking-wide text-gray-500 text-sm mb-2" for="Date of expiry">Date of expiry
                </label>
                <input
                class="@error('date_of_expiry') bg-red-100 @enderror px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                type="date" name="date_of_expiry" value="{{ old('date_of_expiry') }}">
            @error('date_of_expiry')
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
                Add permit
            </button>
        </div>
    </form>
</div>

@endsection
