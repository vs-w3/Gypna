<button class="px-3 py-1 border border-gray-500 rounded-md hover:bg-gray-500 hover:text-white text-sm @if ( app()->getlocale() == 'ka') font-alk @else font-inter @endif"   
    @click="showModal = false">
    <i class="{{ config('icons.fa.cancel') }}"></i>
    {{ __('words.cancel') }}
</button>