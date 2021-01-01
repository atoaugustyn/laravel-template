<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<style>
    html,
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    .main__navbar {
        box-shadow: -1px 1px 4px 1px rgba(130, 126, 126, 0.40);
        -webkit-box-shadow: -1px 1px 4px 1px rgba(130, 126, 126, 0.40);
        -moz-box-shadow: -1px 1px 4px 1px rgba(130, 126, 126, 0.40);
    }
</style>

<body class="text-gray-700">
    <!-- Header Start -->
    <div x-data="{ sidebarIsOpen:true }" class="pb-6">
        <header x-show="sidebarIsOpen" class="fixed top-0 bottom-0 bg-gray-100 w-56 overflow-auto sidebar"
            x-transition:enter="transition ease-out duration-300 -ml-64" x-transition:enter-start=""
            x-transition:enter-end="transform translate-x-64" x-transition:leave="transition ease-out duration-300"
            x-transition:leave-start="" x-transition:leave-end="transform -translate-x-64">
            <div class="max-w-7xl mx-auto py-20 px-4">
                <div x-data="{ open: false }">
                    <button @click="open = !open"
                        class="w-full flex justify-between items-center py-2 text-gray-700 cursor-pointer hover:text-blue-900 focus:outline-none">
                        <span class="flex items-center">
                            <span class="mx-2 text-sm font-semibold">Dashboard</span>
                        </span>
                        <span>
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" style="display: none;">
                                </path>
                                <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                        </span>
                    </button>
                    <hr class="border-gray-400">
                    <div x-show="open" class="bg-gray-100 py-1 rounded-sm text-gray-600 shadow-inner text-sm"
                        x-transition:enter="transition-all ease-in-out duration-300"
                        x-transition:enter-start="opacity-25" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition-all ease-in-out duration-300"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                        <a class="py-2 px-2 block hover:underline" href="#">Manage
                            accounts</a>
                        <a class="py-2 px-2 block hover:underline" href="#">Manage
                            tickets</a>
                    </div>
                </div>
                <div x-data="{ open: false }" class="mt-2">
                    <button @click="open = !open"
                        class="w-full flex justify-between items-center py-2 text-gray-600 cursor-pointer hover:text-blue-900 focus:outline-none">
                        <span class="flex items-center">
                            <span class="mx-2 text-sm font-semibold">Components</span>
                        </span>
                        <span>
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" style="display: none;">
                                </path>
                                <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                        </span>
                    </button>
                    <hr class="border-gray-400">
                    <div x-show="open" class="bg-gray-100 rounded-sm py-1 text-gray-600 shadow-inner text-sm"
                        x-transition:enter="transition-all ease-in-out duration-300"
                        x-transition:enter-start="opacity-25" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition-all ease-in-out duration-300"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                        <a class="py-2 px-2 block hover:underline" href="#">Typography</a>
                        <a class="py-2 px-2 block hover:underline" href="#">Buttons</a>
                        <a class="py-2 px-2 block hover:underline" href="#">Feedback</a>
                        <a class="py-2 px-2 block hover:underline" href="#">Forms</a>
                    </div>
                </div>
                <div x-data="{ open: false }" class="mt-2">
                    <button @click="open = !open"
                        class="w-full flex justify-between items-center py-2 text-gray-600 cursor-pointer hover:text-blue-900 focus:outline-none">
                        <span class="flex items-center">
                            <span class="mx-2 text-sm font-semibold">Settings</span>
                        </span>
                        <span>
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" style="display: none;">
                                </path>
                                <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                        </span>
                    </button>
                    <hr class="border-gray-400">
                    <div x-show="open" class="bg-gray-100 rounded-sm py-1 text-gray-600 shadow-inner text-sm"
                        x-transition:enter="transition-all ease-in-out duration-300"
                        x-transition:enter-start="opacity-25" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition-all ease-in-out duration-300"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                        <a class="py-2 px-2 block hover:underline" href="{{ route ('admin.create') }}">Add user</a>
                        <a class="py-2 px-2 block hover:underline" href="#">Activity log</a>
                        <a class="py-2 px-2 block hover:underline" href="#">Users</a>
                        <a class="py-2 px-2 block hover:underline" href="#">Forms</a>
                    </div>
                </div>
            </div>
        </header>
        @include('layouts.topbar')
    </div>

    <div class="lg:pl-56">
        <div class="my-10 mx-2 px-2 py-2">
            @yield('content')
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</html>
