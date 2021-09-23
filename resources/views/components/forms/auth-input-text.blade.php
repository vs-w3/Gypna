<div class="my-10">
    <label for="{{ $name }}">{{ isset($label) ? $label : null }}</label>
    <input class="mt-2 w-full border gypna-v2-border-mid-green rounded-md gypna-v2-bg-white-green gypna-v2-text-mid-green auth-input" 
        type="{{ $type }}" 
        name="{{ $name }}" 
        id="{{ $name }}" 
        placeholder="{{ $placeholder }}"
        autofocus >
</div>