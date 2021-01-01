<nav class="bg-gray-100 fixed w-full main__navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-8 w-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Logo">
                </div>
                <div>
                    <div class="ml-14 flex items-baseline space-x-4">
                        <button class="p-1 text-gray-800 hover:text-blue-900 focus:outline-nonetext-sm
                            hover:text-white focus:outline-none lg:hidden" @click=" sidebarIsOpen=!sidebarIsOpen">
                            <span>
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 23 23"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z">
                                    </path>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="ml-4 flex items-center md:ml-6">
                <div>
                    <button class="mr-6 p-1 text-gray-800 hover:text-blue-900 focus:outline-none">
                        <span class="sr-only">Toggle mode</span>
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                    </button>
                </div>
                <div x-data="{ noticationIsOpen: false }">
                    <div x-show.transition.duration.500ms.opacity.scale.25.origin.top.right="noticationIsOpen"
                        class="absolute right-20 mt-10 w-48 rounded-sm shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            role="menuitem">Something is
                            coming</a>

                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            role="menuitem">Alerts</a>
                    </div>
                    <div>
                        <button @click="noticationIsOpen = !noticationIsOpen" @click.away="noticationIsOpen = false"
                            class="p-1 text-gray-800 hover:text-blue-900 focus:outline-none">
                            <span class="sr-only">View notifications</span>
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 23 23"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- Profile dropdown -->
                <div class="ml-3 relative">
                    <div x-data="{ profileIsOpen: false }">
                        <div x-show.transition.duration.500ms.opacity.scale.25.origin.top.right="profileIsOpen"
                            class="absolute right-0 mt-10 w-48 rounded-sm shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">Your
                                Profile</a>

                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">Support</a>
                            <hr>
                            <a href="{{ route ('logout') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign
                                out</a>
                        </div>
                        <div>
                            <button @click="profileIsOpen = !profileIsOpen" @click.away="profileIsOpen = false"
                                class="ml-4 pt-2 text-gray-800 hover:text-blue-900 focus:outline-none focus:outline-none"
                                id="user-menu" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 23 23"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
