<div
    x-data="{
        tabSelected: 1,
        tabId: $id('tabs'),
        tabButtonClicked(tabButton){
            this.tabSelected = tabButton.id.replace(this.tabId + '-', '');
            this.tabRepositionMarker(tabButton);
        },
        tabRepositionMarker(tabButton){
            this.$refs.tabMarker.style.width=tabButton.offsetWidth + 'px';
            this.$refs.tabMarker.style.height=tabButton.offsetHeight + 'px';
            this.$refs.tabMarker.style.left=tabButton.offsetLeft + 'px';
        },
        tabContentActive(tabContent){
            return this.tabSelected == tabContent.id.replace(this.tabId + '-content-', '');
        }
    }"

    x-init="tabRepositionMarker($refs.tabButtons.firstElementChild);" class="relative w-full max-w-3xl">

    <div x-ref="tabButtons"
         class="relative flex items-center justify-center w-full h-10 p-1 text-gray-500 bg-gray-100 rounded-full select-none">

        {{ $buttons }}

        <div x-ref="tabMarker" class="absolute left-0 z-10 h-full duration-300 ease-out" x-cloak>
            <div class="w-full h-full bg-white rounded-full shadow-sm"></div>
        </div>
    </div>
    <div class="relative w-full mt-2 content">
        {{ $contents }}
    </div>
</div>
