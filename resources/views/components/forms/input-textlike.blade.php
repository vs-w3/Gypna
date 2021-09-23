<!--
@param $idSelector              // ID for label and for attribute
@param $labelTitle              // Label Title
@param $type                    // Input Field Type
@param $name                    // Input Field name
-->
<div class="my-5 w-full">
    <label class="mb-2 block text-base font-medium text-gray-400" for="{{ $idSelector }}">
        {{ __($labelTitle) }}
    </label>
    <input class="w-full border border-gray-400 rounded-md" id="{{ $idSelector }}"
        type="{{ $type }}" 
        name="{{ $name }}"
        @if (old($name))
            value="{{ old($name) }}"            
        @else
            value="{{ isset($value) ? $value : null }}"
        @endif
        >
    @error($name) <span class="error">{{ __($message) }}</span> @enderror
</div>