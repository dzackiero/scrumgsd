@props(["hideSpinner" => false])

<button {{ $attributes->except(["class"]) }}
        class="rounded-full bg-gradient-to-r from-primary-900 to-secondary-500 p-3 text-white disabled:cursor-not-allowed hover:from-primary-950 hover:to-secondary-600 transition bg ease-linear">
    {{$slot}}
</button>
