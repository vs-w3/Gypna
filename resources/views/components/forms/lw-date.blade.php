<!--
@param $idSelector              // ID for label and for attribute
@param $labelTitle              // Label Titl
@param $bindProperty            // bind to model
-->
<div class="w-full">
    <label class="mb-2 block text-base font-medium text-gray-400" for="{{ $idSelector }}">
        {{ __($labelTitle) }}
    </label>
    <input class="w-full border border-gray-400 rounded-md" id="{{ $idSelector }}"
        type="date" 
        wire:model="{{ $bindProperty }}">
    @error($bindProperty) <span class="error">{{ __($message) }}</span> @enderror
</div>