<main>
    <div class="flex flex-col gap-16 px-4 md:px-12 w-full items-center">
        <h1 class="text-5xl font-semibold text-center text-white">Detail Proyek</h1>
        <x-card>
            <div class="flex flex-col items-start gap-6">
                @if(session("success"))
                    <div
                        class="rounded-xl w-full flex justify-center px-4 py-3 bg-white border border-green-500 bg-opacity-40">
                        <span class="text-primary-900 font-semibold">{{ session("success") }}</span>
                    </div>
                @endif
                <h3 class="text-2xl text-primary-900 font-bold text-center border-b-4 border-b-yellow-500 px-4">
                    Data Proyek
                </h3>
                <x-input wire:model="project.name" label="Nama Proyek" placeholder="Nama Proyek"/>
                <x-input wire:model="project.year" label="Tahun" placeholder="Tahun"/>
                <x-input wire:model="project.team_count" label="Jumlah Tim"
                         placeholder="Jumlah Tim"/>
                <div class="flex justify-between items-center w-full">
                    <x-alert-button label="Delete" wire:click="delete"
                                    wire:confirm="Apakah anda yakin ingin menhapus proyek ini?"/>
                    <div>
                        <x-action-message class="me-3" on="project-updated">
                            {{ __('Saved.') }}
                        </x-action-message>
                        <x-button label="Update" wire:click="update"/>
                    </div>
                </div>
            </div>
        </x-card>
    </div>
</main>
