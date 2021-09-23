<button class="px-3 py-1 border border-g-green-500 rounded-md hover:bg-g-green-500 hover:text-white text-sm @if ( app()->getlocale() == 'ka') font-alk @else font-inter @endif"   
    type="submit"
    @if (isset($formName))
        form="{{ $formName }}"
    @endif
    >
    <i class="{{ config('icons.fa.agree') }}"></i>
    {{ __('words.save') }}
</button>