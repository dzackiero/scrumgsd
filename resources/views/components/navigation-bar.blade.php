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
        <ul class="hidden sm:flex gap-8">
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
                       class="{{ false ? "border-b-4" : "hover:border-b-4" }} font-bold text-blue-800 border-b-yellow-500 px-2">{{ "Halo, " . auth()->user()->name }}</a>
                </li>
            @endif
        </ul>
        <button class="block sm:hidden" @click="slideOverOpen=true">
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
                 class="fixed inset-0 bg-black bg-opacity-30"></div>
            <div class="fixed inset-0 overflow-hidden">
                <div class="absolute inset-0 overflow-hidden">
                    <div class="fixed inset-y-0 right-0 flex max-w-full pl-16">
                        <div
                            x-show="slideOverOpen"
                            @click.away="slideOverOpen = false"
                            x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                            x-transition:enter-start="translate-x-full"
                            x-transition:enter-end="translate-x-0"
                            x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                            x-transition:leave-start="translate-x-0"
                            x-transition:leave-end="translate-x-full"
                            class="w-screen max-w-md bg-white">
                            <div>
                                <div class="flex justify-between items-center w-full h-8 px-4">
                                    <h3 class="font-semibold text-xl">SCRUM GSD</h3>
                                    <button @click="slideOverOpen = false"
                                            class="px-3 py-2 rounded hover:bg-neutral-100">
                                        Close
                                    </button>
                                </div>
                                <div class="relative flex-1 px-4 mt-5 sm:px-5">
                                    <div class="absolute inset-0 px-4 sm:px-5">
                                        <div class="relative h-full overflow-hidden rounded-md">
                                            <nav class="flex flex-col bg-red-500">
                                                @foreach($routes as $title => $route)
                                                    <a wire:navigate href="{{ route($route) }}"
                                                       class="{{ request()->routeIs($route) ? "bg-neural-200" : "hover:bg-neutral-200" }}
                                                       w-full text-lg  p-4 rounded text-end text-primary-900 font-bold">
                                                        {{ $title }}
                                                    </a>
                                                @endforeach
                                            </nav>
                                        </div>
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
