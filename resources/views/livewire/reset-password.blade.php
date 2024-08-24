<main class="w-screen flex py-20">
    <div class="flex flex-col gap-8 px-4 md:px-12 w-full items-center">
        <h1 class="text-5xl font-semibold text-center text-white">Reset Password</h1>
        <h3 class="text-2xl text-center text-white">Lengkapi informasi untuk menyetel ulang password anda</h3>

        {{-- Card --}}
        <x-card>
            <form wire:submit="resetPassword" class="flex flex-col items-center gap-4">
                <h3 class="text-2xl text-primary-900 font-bold text-center border-b-4 border-b-yellow-500 px-4">
                    Reset Password
                </h3>

                <x-input type="email" wire:model="email" name="email" placeholder="Email" label="Email"/>
                <x-inputs.password wire:model="password" name="password" placeholder="Password Baru"
                                   label="Password Baru"/>
                <x-inputs.password wire:model="password_confirmation" name="password_confirmation"
                                   placeholder="Konfirmasi Password"
                                   label="Konfirmasi Password"/>
                <x-button type="submit" label="Kirim"/>
            </form>
        </x-card>
    </div>
</main>
