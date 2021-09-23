<div class="my-10" x-data="{ checked: false}">
    <input class="hidden" id="{{ $id }}" type="checkbox" name="{{ $name }}"/>
    
    <i class="far fa-check-square text-lg gypna-v2-text-mid-green" @click=" checked = !checked " x-show="checked"></i>
    <i class="far fa-square text-lg gypna-v2-text-mid-green" @click=" checked = !checked " x-show="!checked"></i>
    <label class="ml-3 text-sm gypna-v2-text-mid-green" for="{{ $id }}" @click=" checked = !checked ">
        {{ $label }}
    </label>
</div>