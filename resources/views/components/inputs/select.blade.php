@props(["label" => ""])

<div class="flex flex-col gap-1 w-full">
    <label class="text-primary-900 font-semibold text-lg">{{$label}}</label>
    <select
        {{$attributes->except(["class"])}} class="rounded-full py-2 border-gray-400 text-neutral-700
        @error($attributes["wire:model.change"] ?? false)
         !border-2 !border-red-500 @enderror">
        {{ $slot }}
    </select>
    <span
        class="text-white font-semibold">@error($attributes["wire:model.change"] ?? false) {{ $message }} @enderror</span>
</div>
