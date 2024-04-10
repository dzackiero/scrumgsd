<main class="w-screen flex py-16">
    <div class="flex flex-col gap-16 px-12 w-full items-center">
        <x-card>
            <div class="flex flex-col items-center gap-6">
                <h3 class="text-2xl text-primary-900 font-bold text-center border-b-4 border-b-yellow-500 px-4">
                    Verifikasi Email
                </h3>
                <p class="text-white text-center">Tolong verifikasi email Anda untuk melanjutkan. Kami telah
                    mengirimkan email verifikasi ke alamat yang Anda berikan. Terima kasih</p>
                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-primary-900">
                        Berhasil mengirim ulang
                    </div>
                @endif
                <x-button wire:click="sendVerification" label="Kirim Ulang Email"/>
                <a href="{{ route("logout") }}" class="underline text-primary-900">Logout</a>
            </div>
        </x-card>
    </div>
</main>
