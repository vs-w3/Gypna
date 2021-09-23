{{--
@param string $initEventName            // livewire initial event name
@param bool|object $item                // livewire initial event name's argument [$object|null]
@param string $btnIcon                  // Icon class
@param string $btnTitle                 // Btn Title key of laravel localize function
@param string $btnTooltip               // key of laravel localize function
--}}
<button class="px-3 py-1 border border-g-green-500 rounded-md text-g-green-500 hover:bg-g-green-500 hover:text-white text-sm @if ( app()->getlocale() == 'ka') font-alk @else font-inter @endif relative"           
        
        wire:click="$emitSelf('initRecordArray')"

        @mouseover="toolTip = true"
        @mouseout="toolTip = false"
        @click="showModal = !showModal">
        
        <span class="ml-3 inline-block absolute -top-10 py-1 px-3 bg-white border border-gray-200 rounded-md drop-shadow-2xl text-sm text-gray-500 whitespace-nowrap"
                x-show="toolTip">
            {{ __($btnTooltip) }}
        </span>

        <i class="{{ $btnIcon }}"></i>
        
        <span class="ml-1">{{ __($btnTitle) }}</span>
</button>