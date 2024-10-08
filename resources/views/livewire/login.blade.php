<main class="w-screen flex py-20">
    <div class="flex flex-col gap-8 px-4 md:px-12 w-full items-center">
        <h1 class="text-5xl font-semibold text-center text-white">Instrumen Penilaian Scrum</h1>
        <h3 class="text-2xl text-center text-white">Masuk untuk melakukan penilaian scrum</h3>

        {{-- Card --}}
        <x-card>
            <form wire:submit="login" class="flex flex-col items-center gap-4">
                <h3 class="text-2xl text-primary-900 font-bold text-center border-b-4 border-b-yellow-500 px-4">
                    Masuk
                </h3>

                @if(session("success"))
                    <div
                        class="rounded-xl w-full flex justify-center px-4 py-3 bg-white border border-green-500 bg-opacity-40">
                        <span class="text-primary-900 font-semibold">{{ session("success") }}</span>
                    </div>
                @endif

                @if(session("error"))
                    <div
                        class="rounded-xl w-full flex justify-center px-4 py-3 bg-white border border-red-500 bg-opacity-40">
                        <span class="text-red-600 font-semibold">{{ session("error") }}</span>
                    </div>
                @endif

                @error('attempt')
                <div
                    class="rounded-xl w-full flex justify-center px-4 py-3 bg-white border border-red-500 bg-opacity-40">
                    <span class="text-red-600 font-semibold">{{ $message }}</span>
                </div>
                @enderror

                <x-input type="email" wire:model="email" placeholder="Email" label="Email"/>
                <x-inputs.password wire:model="password" placeholder="Password" label="Password"/>
                <x-button type="submit" label="Masuk"/>

                <a wire:navigate href="{{route("password.request")}}"
                   class="font-bold hover:underline text-primary-900">
                    Lupa Password
                </a>
                <p class="text-primary-900">Belum memiliki akun?
                    <a wire:navigate href="{{route("register")}}" class="font-bold hover:underline">Daftar</a>
                </p>
            </form>
        </x-card>
    </div>
</main>
