<button class="py-2 px-5 rounded-lg gypna-v2-bg-mid-green text-white"
    @click=" show = !show "
    @if (isset($event))
    wire:click="$emit('{{ $event }}')"
    @endif >
    {{ $action }}
</button>