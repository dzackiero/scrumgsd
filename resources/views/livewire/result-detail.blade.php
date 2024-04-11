<main class="w-screen flex py-16">
    <div class="flex flex-col gap-16  px-4 md:px-12 w-full items-center">
        <h1 class="text-5xl font-semibold text-center text-white">Hasil Penilaian</h1>
        <x-card width="max-w-6xl">
            <div class="flex flex-col items-start gap-6">
                <div class="w-full flex flex-col sm:flex-row gap-6 justify-between">
                    <div>
                        <h3 class="text-2xl text-primary-900 font-bold">{{ $result->name }}</h3>
                        <h4 class="text-2xl text-primary-900">{{ $result->position }}</h4>
                    </div>
                    <div class="flex flex-col gap-4 items-center">
                        {{--                        <h5 class="text-primary-900 font-bold text-2xl border-b-4 border-b-yellow-500">Skor</h5>--}}
                        <div
                            class="bg-white bg-opacity-50 rounded-full border border-yellow-500 w-32 h-32 grid place-items-center">
                            <div class="flex flex-col items-center">
                                <h3 class="text-3xl text-primary-900 font-semibold">
                                    {{ $result->score }}
                                </h3>
                                <p class="text-primary-900">Skor</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="flex w-full justify-center">
                    <h3 class="text-2xl text-primary-900 font-bold text-center border-b-4 border-b-yellow-500 px-4">
                        Detail Kompetensi
                    </h3>
                </div>
                <h5 class="font-semibold text-white text-lg">
                    Anda dapat memilih lebih dari satu jawaban atau tidak memilih jawaban sama sekali
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
                            class="flex items-center gap-4 p-4 bg-white bg-opacity-50 rounded-lg border border-white cursor-default">
                            <input type="checkbox" class="w-7 h-7 border-none rounded" disabled
                                   wire:model="options.{{$option->id}}.state"
                            >
                            <p class="text-primary-900">{{ $option->text }}</p>
                        </label>
                    @endforeach
                </div>
            </div>
        </x-card>
    </div>
</main>
