<div class="mb-32
    xl:grid xl:grid-cols-12 xl:gap-4">
    <div class="h-0 aspect-w-16 aspect-h-9 
        xl:col-span-5">
        <!-- /storage/images/CrVtBDLbYDxnbwk4bx8lXXGBITPIH5nUJifCcmrZ.jpg -->
        <img class="" src="{{ asset('/storage/images/' . $eventImage) }}" alt="{{ $eventTitle }}"/>
    </div>
    <div class="xl:col-span-7">
        <h2 class="mb-5 text-4xl">
            <a href="{{ url(app()->getlocale() . '/events/' .  $eventID) }}">
                {{ $eventTitle }}
            </a>
        </h2>
        <div class="mb-16 flex space-x-6 text-gray-600">
            <div>
                <span class="mr-3 text-gray-400 font-semibold">{{ __('words.start') }}</span>
                <i class="{{ config('icons.fa.calendar_r')}} mr-1 text-xl"></i>
                <span>{{ $eventStart }}</span>
            </div>
            <div>
                <span class="mr-3 text-gray-400 font-semibold">{{ __('words.end') }}</span>
                <i class="{{ config('icons.fa.calendar_r')}} mr-1 text-xl"></i>
                <span>{{ $eventEnd }}</span>
            </div>
        </div>
        <div class="text-gray-500">
            <p>{{ $eventDescription }}</p>
        </div>
    </div>
</div>