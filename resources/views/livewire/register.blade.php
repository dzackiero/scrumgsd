<main class="w-screen flex py-20">
    <div class="flex flex-col gap-8 px-4 md:px-12 w-full items-center">
        <h1 class="text-5xl font-semibold text-center text-white">Instrumen Penilaian Scrum</h1>
        <h3 class="text-2xl text-center text-white">Masuk untuk melakukan penilaian scrum</h3>

        {{-- Card --}}
        <x-card>
            <form wire:submit="register " class="flex flex-col items-center gap-4">
                <h3 class="text-2xl text-primary-900 font-bold text-center border-b-4 border-b-yellow-500 px-4">
                    Daftar
                </h3>
                <x-input type="text" wire:model="name" placeholder="Nama Lengkap" label="Nama Lengkap"/>
                <x-input type="email" wire:model="email" placeholder="Email" label="Email"/>
                <x-inputs.password wire:model="password" placeholder="Password" label="Password"/>
                <x-button type="submit" label="Daftar"/>

                <p class="text-primary-900">Sudah memiliki akun?
                    <a wire:navigate href="{{route("login")}}" class="font-bold hover:underline">Login</a>
                </p>
            </form>
        </x-card>
    </div>
</main>
