@extends('layouts.app')

@section('title', 'Certificates')

@section('content')

<div class="text-right breadcrumb font-bold">
    <ul class="space-x-2 text-gray-500 text-xs">
        <a href="{{ url('dashboard') }}">
            <li class="inline hover:text-blue-500">Home </li>
        </a>>
        <a href="{{ route('certificate.create') }}">
            <li class="inline text-blue-500">Add certificate </li>
        </a>>
        <li class="inline text-gray-400">Certificates</li>
    </ul>
</div>
<div class="bg-gray-50 py-4 rounded-md border px-8 pb-2 flex flex-col my-2">
    <h2 class="my-4 text-gray-800 text-2xl font-bold">Certificates </h2>
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
                                    Vessel name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Certiificate name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Issue date
                                </th>
                                <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Expiry date
                            </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                            </tr>
                        </thead>
                        @foreach ($certificates as $certificate)
                        <tbody class="bg-white divide-y divide-gray-200 text-sm">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <p>{{ $certificate->vessel->name }}</p>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $certificate->name }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $certificate->issue_date }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $certificate->expiry_date }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-100">
                                    <div class="space-x-2">
                                        <div class="status__badge inline-block bg-red-600 text-xs rounded-sm px-0.5">@if ($certificate->expiry_date <= date(("Y-m-d"))) 
                                            expired @endif</div>
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
