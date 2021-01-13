@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="text-right breadcrumb">
    <ul class="space-x-2 text-gray-500 text-xs">
        <a href="#">
            <li class="inline hover:text-blue-500">Home </li>
        </a>/
        <li class="inline text-gray-400">Dashboard</li>
    </ul>
</div>
<div class="bg-gray-50 py-4 rounded-sm px-8 pb-2 mb-10 flex flex-col my-2">
    <h2 class="my-4 text-gray-800 text-2xl font-bold">Dashboard</h2>
    <hr class="mb-4">
    <div class="flex">
        <div class="flex-1 mx-2">
            <div class="bg-blue-500 py-6 rounded-t-sm">
                <p class="text-white text-4xl pl-4 font-bold">0</p>
                <p class="text-white pl-4">total companies</p>
            </div>
            <div class="bg-blue-600 py-1 rounded-br-sm rounded-bl-sm text-gray-300">
                <p class="pl-4 text-sm text-center">More Info</p>
            </div>
        </div>
        <div class="flex-1 mx-2">
          <div class="bg-red-500 py-6 rounded-t-sm">
            <p class="text-white text-4xl pl-4 font-bold">0</p>
            <p class="text-white pl-4">total vessels</p>
          </div>
          <div class="bg-red-600 py-1 rounded-br-sm rounded-bl-sm text-gray-300">
            <p class="pl-4 text-sm text-center">More Info</p>
          </div>
        </div>
        <div class="flex-1 mx-2">
            <div class="bg-yellow-500 py-6 rounded-t-sm">
                <p class="text-white text-4xl pl-4 font-bold">0</p>
                <p class="text-white pl-4">total permits</p>
            </div>
            <div class="bg-yellow-600 py-1 rounded-br-sm rounded-bl-sm text-gray-300">
                <p class="pl-4 text-sm text-center">More Info</p>
            </div>
          </div>
        <div class="flex-1 mx-2">
            <div class="bg-purple-500 py-6 rounded-t-sm">
                <p class="text-white text-4xl pl-4 font-bold">0</p>
                <p class="text-white pl-4">total certificates</p>
            </div>
            <div class="bg-purple-600 py-1 rounded-br-sm rounded-bl-sm text-gray-300">
                <p class="text-white pl-4 text-sm text-center">More Info</p>
            </div>
        </div>
      </div>
</div>

</div>


@endsection
