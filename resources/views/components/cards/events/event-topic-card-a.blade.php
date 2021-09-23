<div>
    <!-- Image & Title - Specialities -->
    <div class="grid grid-cols-2 space-x-6">
        <div class="h-0 aspect-w-16 aspect-h-9">
            <img src="" alt="" srcset="">
        </div>
        <div>
            <x-texts.titles.title-h3-a title="წვლილი გადმოქცეული ააშენო" />
            <div>

            </div>
        </div>
    </div>
    <!-- END Image & Title - Specialities -->

    <!-- Date & Address -->
    <div class="my-10 grid grid-cols-2 space-x-6">
        <!-- Date -->
        <div>
            <p class="mb-2 flex justify-between">
                <span class="mr-3 text-gray-400 font-semibold text-lg">{{ __('words.start') }}</span>
                <span>
                    <span class="mr-3">
                        <i class="{{ config('icons.fa.calendar_r')}} mr-1 text-xl"></i>
                        {{-- explode(' ',$event->event_start)[0] --}}
                        2021-11-01
                    </span>
                    <span class="mr-3">
                        <i class="{{ config('icons.fa.clock_r')}} mr-1 text-xl"></i>
                        {{-- explode(' ',$event->event_start)[1] --}}
                        18:00
                    </span>
                </span>
            </p>

            <p class="flex justify-between">
                <span class="mr-3 text-gray-400 font-semibold text-lg">{{ __('words.end') }}</span>
                <span>
                    <span class="mr-3">
                        <i class="{{ config('icons.fa.calendar_r')}} mr-1 text-xl"></i>
                        {{-- explode(' ',$event->event_start)[0] --}}
                        2021-11-01
                    </span>
                    <span class="mr-3">
                        <i class="{{ config('icons.fa.clock_r')}} mr-1 text-xl"></i>
                        {{-- explode(' ',$event->event_start)[1] --}}
                        23:00
                    </span>
                </span>
            </p>
        </div>
        <!-- END Date -->
        <div>
            Address
        </div>
    </div>
    <!-- END Date & Address -->
</div>