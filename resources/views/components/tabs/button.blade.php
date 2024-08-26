@props(["label"])

<button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button"
        class="relative z-20 flex-1 h-8 px-3 text-sm font-medium transition-all rounded-fu cursor-pointer whitespace-nowrap">
    {{ $label }}
</button>
