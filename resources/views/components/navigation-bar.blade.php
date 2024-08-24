@php
    $routes = [
        "Home" => "home",
        "Instrumen Penilaian" => "form",
    ];

@endphp

<nav class="absolute z-30 w-screen" x-data="{ slideOverOpen: false }">
    <div
        class="flex justify-between items-center m-4 text-white bg-white border border-white bg-opacity-40 px-8 md:px-12 py-6 rounded-full drop-shadow-xl">
        <a href="{{ route("home") }}">
            <x-logo/>
        </a>
        <ul class="hidden lg:flex gap-8">
            @foreach($routes as $title => $route)
                <li><a wire:navigate href="{{ route($route) }}"
                       class="{{ request()->routeIs($route) ? "border-b-4" : "hover:border-b-4" }} font-bold text-blue-800 border-b-yellow-500 px-2">{{ $title }}</a>
                </li>
            @endforeach

            @if(auth()->check())
                <li><a wire:navigate href="{{ route("results") }}"
                       class="{{ request()->routeIs("results") || request()->routeIs("results.detail") ? "border-b-4" : "hover:border-b-4" }} font-bold text-blue-800 border-b-yellow-500 px-2">{{ "Laporan Penilaian" }}</a>
                </li>
                <li><a wire:navigate href="{{ route("logout") }}"
                       class="{{ false ? "border-b-4" : "hover:border-b-4" }} font-bold text-blue-800 border-b-yellow-500 px-2">Logout</a>
                </li>
            @endif
        </ul>
        <button class="block lg:hidden" @click="slideOverOpen=true">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
            </svg>
        </button>
    </div>

    {{--  Responsive  --}}
    <template x-teleport="body">
        <div
            x-show="slideOverOpen"
            @keydown.window.escape="slideOverOpen=false"
            class="relative z-[99]">
            <div x-show="slideOverOpen" x-transition.opacity.duration.600ms @click="slideOverOpen = false"
                 class="fixed inset-0 bg-black bg-opacity-10"></div>
            <div class="fixed inset-0 overflow-hidden">
                <div class="absolute inset-0 overflow-hidden">
                    <div class="fixed inset-y-0 right-0 flex max-w-full pl-10">
                        <div
                            x-show="slideOverOpen"
                            @click.away="slideOverOpen = false"
                            x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                            x-transition:enter-start="translate-x-full"
                            x-transition:enter-end="translate-x-0"
                            x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                            x-transition:leave-start="translate-x-0"
                            x-transition:leave-end="translate-x-full"
                            class="w-screen max-w-md">
                            <div
                                class="flex flex-col h-full py-5 overflow-y-scroll bg-white border-l shadow-lg border-neutral-100/70">
                                <div class="px-4 sm:px-5">
                                    <div class="flex items-center justify-between pb-1">
                                        <x-logo width="160"/>
                                        <div class="flex items-center h-auto ml-3">
                                            <button @click="slideOverOpen=false"
                                                    class="absolute top-0 right-0 z-30 flex items-center justify-center px-3 py-2 mt-4 mr-5 space-x-1 text-xs font-medium uppercase border rounded-md border-neutral-200 text-neutral-600 hover:bg-neutral-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                                <span>Close</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative flex-1 px-4 mt-5 sm:px-5">
                                    <div class="flex flex-col gap-4">
                                        @foreach($routes as $title => $route)
                                            <a class="w-full {{ request()->routeIs($route) ? "bg-primary-200" : "" }} text-end font-semibold px-6 py-3 hover:bg-primary-200 rounded-lg"
                                               href="{{ route($route) }}">{{ $title }}</a>
                                        @endforeach
                                        @if(auth()->check())
                                            <a class="w-full {{ request()->routeIs("results") || request()->routeIs("results.detail") ? "bg-primary-200" : "" }} text-end font-semibold px-6 py-3 hover:bg-primary-200 rounded-lg"
                                               href="{{ route("results") }}">{{ "Laporan Penilaian" }}</a>
                                            <a class="w-full {{ false ? "bg-primary-200" : "" }} text-end font-semibold px-6 py-3 hover:bg-primary-200 rounded-lg"
                                               href="{{ route("logout") }}">{{ "Logout" }}</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>
</nav>
