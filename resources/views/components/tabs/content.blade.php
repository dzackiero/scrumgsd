<div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative" x-cloak>
    {{ $slot }}
</div>
