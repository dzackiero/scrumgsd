<main class="w-screen flex py-16">
    <div class="flex flex-col gap-16 px-4 md:px-12 w-full items-center">
        <h1 class="text-5xl font-semibold text-center text-white">Instrumen Penilaian Scrum</h1>
        @if($step == \App\Enums\Step::Project->value)
            <x-card>
                <div class="flex flex-col items-start gap-6">
                    <h3 class="text-2xl text-primary-900 font-bold text-center border-b-4 border-b-yellow-500 px-4">
                        Data Proyek
                    </h3>
                    <x-input wire:model="projectForm.name" label="Nama Proyek" placeholder="Nama Proyek"/>
                    <x-input wire:model="projectForm.year" label="Tahun" placeholder="Tahun"/>
                    <x-input wire:model="projectForm.teamCount" label="Jumlah Tim" placeholder="Jumlah Tim"/>
                    <div class="flex justify-end w-full">
                        <x-button label="Selanjutnya"
                                  wire:click="changeStep({{ \App\Enums\Step::Personal->value }})"/>
                    </div>
                </div>
            </x-card>
        @endif

        @if($step == \App\Enums\Step::Personal->value)
            <x-card>
                <div class="flex flex-col items-start gap-6">
                    <h3 class="text-2xl text-primary-900 font-bold text-center border-b-4 border-b-yellow-500 px-4">
                        Data Pribadi
                    </h3>
                    <x-input label="Nama" placeholder="Nama Lengkap" wire:model="personalForm.name"/>
                    <x-inputs.select label="Posisi" wire:model="personalForm.position">
                        <option value="" disabled>Pilih Posisi</option>
                        <option value="Scrum Developer">Scrum Developer</option>
                        <option value="Scrum Master">Scrum Master</option>
                        <option value="Product Owner">Product Owner</option>
                    </x-inputs.select>
                    <div class="flex justify-end w-full">
                        <x-button label="Selanjutnya"
                                  wire:click="changeStep({{ \App\Enums\Step::Quiz->value }})"/>
                    </div>
                </div>
            </x-card>
        @endif

        @if($step == \App\Enums\Step::Quiz->value)
            <x-card width="max-w-6xl">
                <div class="flex flex-col items-start gap-6">
                    <h3 class="text-2xl text-primary-900 font-bold text-center border-b-4 border-b-yellow-500 px-4">
                        Penilaian Kompetensi
                    </h3>
                    <h5 class="font-semibold text-white text-lg">Anda dapat memilih lebih dari satu jawaban atau tidak
                        memilih jawaban sama sekali
                    </h5>
                    <div
                        class="flex overflow-x-auto md:flex-row items-center w-full px-2 md:px-6">
                        @foreach($questions as $order => $question)
                            <x-step-button wire:click="changeQuestion({{$order}})" number="{{ $order }}"
                                           :active="$order <= $current"/>
                            @if (!$loop->last)
                                <div class="flex-none w-6 md:flex-1 h-0.5 bg-yellow-500"></div>
                            @endif
                        @endforeach
                    </div>

                    <h3 class="text-lg font-bold text-primary-900">{{  "{$questions[$current]->order}. {$questions[$current]->text}" }}</h3>
                    <div class="w-full flex flex-col gap-4">
                        @foreach($questions[$current]->options as $option)
                            <label
                                class="flex items-center cursor-pointer gap-4 p-4 bg-white bg-opacity-50 rounded-lg border border-white">
                                <input type="checkbox" class="w-7 h-7 border-none rounded"
                                       wire:model="options.{{$option->id}}.state">
                                <p class="text-primary-900">{{ $option->text }}</p>
                            </label>
                        @endforeach
                    </div>

                    {{-- Navigations --}}
                    <div class="hidden sm:flex justify-between w-full">
                        <x-button outline hide-spinner label="Sebelumnya"
                                  wire:click="changeQuestion({{$current - 1}})"/>
                        <x-button label="Selanjutnya" wire:click="changeQuestion({{$current + 1}})"/>
                    </div>
                    <div class="flex sm:hidden justify-between w-full">
                        <x-icon-button wire:click="changeQuestion({{ $current - 1 }})">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"/>
                            </svg>
                        </x-icon-button>
                        <x-icon-button wire:click="changeQuestion({{$current + 1}})">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
                            </svg>
                        </x-icon-button>
                    </div>
                </div>
            </x-card>

        @endif
    </div>

</main>
