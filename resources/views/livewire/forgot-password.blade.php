<main class="w-screen flex py-20">
    <div class="flex flex-col gap-8 px-4 md:px-12 w-full items-center">
        <h1 class="text-5xl font-semibold text-center text-white">Instrumen Penilaian Scrum</h1>
        <h3 class="text-2xl text-center text-white">Masukkan Email untuk menyetel ulang password anda!</h3>

        {{-- Card --}}
        <x-card>

            <form wire:submit="sendRequest" class="flex flex-col items-center gap-4">
                <h3 class="text-2xl text-primary-900 font-bold text-center border-b-4 border-b-yellow-500 px-4">
                    Lupa Password
                </h3>
                @error('status')
                <div
                    class="rounded-xl w-full flex justify-center px-4 py-3 bg-white border border-red-500 bg-opacity-40">
                    <span class="text-red-600 font-semibold">{{ $message }}</span>
                </div>
                @enderror
                <x-input type="email" wire:model="email" placeholder="Email" label="Email"/>
                <x-button type="submit" label="Kirim"/>
            </form>
        </x-card>
    </div>
</main>
