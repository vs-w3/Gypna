<!-- Toggle A 
@param $idSelector
@param $labelTitle
@param $bindProperty
-->
<div class="w-full text-right">
  
    <label for="{{ $idSelector }}" class="mb-4 block text-base font-medium text-gray-400 cursor-pointer">
        {{ $labelTitle }}
    </label>
    <div class="flex  justify-end">
        <div class="mr-3 text-gray-700 font-medium">
            {{ __('words.no') }}
        </div>
        <!-- toggle -->
        <div class="relative">
            <label for="{{ $idSelector }}">
                <!-- input -->
                <input id="{{ $idSelector }}" type="checkbox" class="toggle-checkbox sr-only" 
                    wire:model="{{ $bindProperty }}"/>
                <!-- line -->
                <div class="w-10 h-4 bg-gray-400 rounded-full shadow-inner"></div>
                <!-- dot -->
                <div class="dot absolute w-6 h-6 bg-white rounded-full shadow -left-1 -top-1 transition"></div>
            </label>
        </div>
            <!-- label -->
        <div class="ml-3 text-gray-700 font-medium">
            {{ __('words.yes') }}
        </div>
    </div>
    
</div>