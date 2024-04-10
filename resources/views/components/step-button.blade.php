@props(["number", "active" => "false"])

<button {{ $attributes->except(["class"]) }}
        class="{{ $active ? "bg-yellow-500" : "" }} flex-none rounded-full border border-yellow-500 font-bold text-lg text-center text-white">
    <p class="w-12 h-12 flex items-center justify-center">{{ $number }}</p>
</button>
