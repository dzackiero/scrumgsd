@props(["width" => "max-w-3xl"])

<div
    class="rounded-3xl w-full {{ $width }} p-8 md:p-12 bg-white border border-white bg-opacity-40">
    {{ $slot }}
</div>
