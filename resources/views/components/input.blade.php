@props(["label" => ""])

<div class="flex flex-col gap-1 w-full">
    <label class="text-primary-900 font-semibold text-lg">{{$label}}</label>
    <input
        {{$attributes->except(["class"])}} class="rounded-full py-2 border-gray-400
        @error($attributes["wire:model"] ?? false)
         !border-2 !border-red-500 @enderror"/>
    <span
        class="text-white font-semibold">@error($attributes["wire:model"] ?? false) {{ $message }} @enderror</span>
</div>
