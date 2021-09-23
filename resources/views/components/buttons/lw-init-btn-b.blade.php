{{--
@param string $initEventName            // livewire initial event name
@param bool|object $item                // livewire initial event name's argument [$object|null]
@param string $btnIcon                  // Icon class
@param string $btnTitle                 // Btn Title key of laravel localize function
@param string $btnTooltip               // key of laravel localize function
--}}
<button class="px-3 py-1 text-lg relative" 
        wire:click="$emitSelf('initRecordArray')"
        
        @mouseover="toolTip = true"
        @mouseout="toolTip = false"
        @click="showModal = !showModal">

        <span class="ml-3 inline-block absolute -top-8 py-1 px-3 bg-white border border-gray-200 rounded-md drop-shadow-2xl text-sm text-gray-500 whitespace-nowrap"
                x-show="toolTip">
            {{ __($btnTooltip) }}
        </span>

        <i class="{{ $btnIcon }}"></i>
</button>