@extends('layouts.app')

@section('title', 'Permit units')

@section('content')

<div class="text-right">
    <ul class="space-x-2 text-gray-500 text-xs font-mono">
        <a href="{{ url('dashboard') }}">
            <li class="inline hover:text-blue-500">Home </li>
        </a>>
        <a href="{{ route('permit_unit.create') }}">
            <li class="inline text-blue-500">Create Permit unit </li>
        </a>>
        <li class="inline text-gray-400">Permit units</li>
    </ul>
</div>
<div class="bg-gray-50 py-4 rounded-md border px-8 pb-2 flex flex-col my-2">
    <h2 class="my-4 text-gray-800 text-2xl font-bold">Permit Units</h2>
    <hr class="mb-4">

    <div class="flex flex-col mb-6">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Permit unit name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Permit type
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        @foreach ($permitUnits as $permitUnit)
                        <tbody class="bg-white divide-y divide-gray-200 text-sm">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <p>{{ $permitUnit->name }}</p>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $permitUnit->permitTypes->name }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-500">
                                    <div class="space-x-2">
                                        <div class="inline-block underline text-blue-400"><a
                                                href="{{ route('permit_unit.edit',$permitUnit->id) }}">Edit</a></div>
                                        <div class="inline-block underline text-blue-400"><a href="">View</a></div>
                                        <div class="inline-block underline text-red-400"><a href="">Delete</a></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
