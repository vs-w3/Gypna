<!--
@param $idSelector              // ID for label and for attribute
@param $labelTitle              // Label Title
@param $data                    // Select data
@param $bindProperty            // bind to model
-->
<div class="w-full">
    <label class="mb-2 block text-base font-medium text-gray-400" for="{{ $idSelector }}">
        {{ __($labelTitle) }}
    </label>
    <select class="w-full border border-gray-400 rounded-md" id="{{ $idSelector }}"
            wire:model="{{ $bindProperty }}">
            <option value="" hidden>{{ __('words.choose') }}</option>
        @foreach ($data as $item)
        <option value="{{ $item['id'] }}" >{{ $item['name'] }}</option>
        @endforeach
    </select>
</div>