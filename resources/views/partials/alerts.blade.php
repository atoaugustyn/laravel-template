@if (session ('success'))

<div class="bg-green-300 rounded-sm">
    <span class="closebtn text-2xl cursor-pointer float-right mx-2 text-green-700 hover:text-green-500"
        onclick="this.parentElement.style.display='none';">
        &times;</span>
    <div class="mx-4 px-4 py-3 text-gray-800 text-sm">
        <div class="flex items-start">
            <div class="mt-0.5">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div class= "mx-4">
                <p class="tracking-wide text-gray-800 pt-1">
                       {{ session('success') }}
                </p>   
            </div>
        </div>
    </div>
</div>

@endif
