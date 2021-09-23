<!--
@param $idSelector              // ID for label and for attribute
@param $labelTitle              // Label Title
@param $type                    // Input Field Type
@param $name                    // Input Field name
@param $hideConfig              // Config Hide array
-->
<div class="my-5 w-full">
    <label class="mb-2 block text-base font-medium text-gray-400" for="{{ $idSelector }}">
        {{ __($labelTitle) }}
    </label>
    {{ $trixField }}
    @error($name) <span class="error">{{ __($message) }}</span> @enderror
</div>