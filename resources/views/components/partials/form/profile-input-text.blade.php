<div class="mb-3">
    <input class="mt-2 w-full border gypna-v2-border-mid-green rounded-md auth-input"
        type="{{ $type }}" 
        wire:model="{{ $bind }}" 
        placeholder="{{ $placeholder }}">
    @error($bind) <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
</div>
