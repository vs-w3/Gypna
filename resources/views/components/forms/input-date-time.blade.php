<div class="my-5 w-full">
    <label class="mb-2 block text-base font-medium text-gray-400" for="{{ $idSelector }}">
        {{ __($labelTitle) }}
    </label>
    <input class="w-full border border-gray-400 rounded-md" id="{{ $idSelector }}"
        type="{{ $type }}" 
        name="{{ $name }}">
    @error($name) <span class="error">{{ __($message) }}</span> @enderror
</div>