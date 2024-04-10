@props(["label" => "", "outline" => false, "hideSpinner" => false, "prefixIcon" => false, "suffixIcon" => false])

@php
    $buttonClasses = "rounded-full " . ($prefixIcon || $suffixIcon ? "px-4 " : "px-8 ") . "py-2 text-white text-lg disabled:cursor-not-allowed hover:bg-gradient-to-r hover:from-primary-950 hover:to-secondary-600 transition bg ease-linear";
    $loadingClasses = "inline-block h-6 w-6 animate-spin rounded-full border-4 border-solid border-current border-e-transparent align-[-0.125em] text-surface motion-reduce:animate-[spin_1.5s_linear_infinite] dark:text-white";
@endphp

<button wire:loading.attr="disabled"
        {{$attributes->except("class")}}
        class="
        @if($outline)
            {{$buttonClasses}} text-primary-900 hover:text-white hover:bg-gradient-to-r
        @else
            {{$buttonClasses}} bg-gradient-to-r from-primary-900 to-secondary-500
        @endif
        ">
    <div class="flex items-center gap-2">
        @if($prefixIcon && isset($icon))
            {{ $icon }}
        @endif
        <p class="{{ $prefixIcon || $suffixIcon ? "hidden md:block" : "" }}">{{$label}}</p>
        @if($suffixIcon && isset($icon))
            {{ $icon }}
        @endif
        @if(!$hideSpinner)
            <div wire:loading
                 class="{{$loadingClasses}}"
                 role="status">
            <span
                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...</span>
            </div>
        @endif
    </div>
</button>
