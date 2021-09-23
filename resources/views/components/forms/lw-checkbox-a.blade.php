<div>
    <label class="text-base"
        for="{{ $idSelector }}"
        x-data="{ checked: false }">
        <input class="hidden" type="checkbox" id="{{ $idSelector }}"
            wire:model="record.{{ $index }}"
            @click="checked = !checked">

        <div class="inline-block w-4">
            <i class="{{ config('icons.fa.square')}}" x-show="!checked"></i>
            <i class="{{ config('icons.fa.checked')}}" x-show="checked"></i>
        </div>
        
        <span>{{ $checkboxTitle }}</span>
    </label>
</div>