<button class="px-3 py-1 border border-red-500 rounded-md hover:bg-red-500 hover:text-white text-sm @if ( app()->getlocale() == 'ka') font-alk @else font-inter @endif"
    wire:click="$emitSelf('deleteRecord')"   
    @click="showModal = false">
    <i class="{{ config('icons.fa.delete') }}"></i>
    {{ __('words.delete') }}
</button>