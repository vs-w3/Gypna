<x-layouts.main>
    <x-templates.pages.page-container-2xl-left-main-right-a>
        <x-slot name="leftSide">
            Left Side
        </x-slot>

        <x-slot name="main">

            <div class="my-20">
                <!-- Event Data -->
                <div class="mb-20 pb-10">
                    <div class="h-0 aspect-w-16 aspect-h-9">
                        <img src="{{ asset('/storage/images/' . $event->img) }}" alt="{{ $event->name }}" srcset="">
                    </div>
    
                    <h1 class="my-10 text-4xl">
                        {{ $event->name }}
                    </h1>
    
                    <div class="mb-10 flex justify-between">
                        <p>
                            <span class="mr-3 text-gray-400 font-semibold text-lg">{{ __('words.start') }}</span>
                            <span class="mr-3">
                                <i class="{{ config('icons.fa.calendar_r')}} mr-1 text-xl"></i>
                                {{ explode(' ',$event->event_start)[0] }}
                            </span>
                            <span class="mr-3">
                                <i class="{{ config('icons.fa.clock_r')}} mr-1 text-xl"></i>
                                {{ explode(' ',$event->event_start)[1] }}
                            </span>
                        </p>
    
                        <p>
                            <span class="mr-3 text-gray-400 font-semibold text-lg">{{ __('words.end') }}</span>
                            <span class="mr-3">
                                <i class="{{ config('icons.fa.calendar_r')}} mr-1 text-xl"></i>
                                {{ explode(' ',$event->event_end)[0] }}
                            </span>
                            <span class="mr-3">
                                <i class="{{ config('icons.fa.clock_r')}} mr-1 text-xl"></i>
                                {{ explode(' ',$event->event_end)[1] }}
                            </span>
                        </p>
                    </div>
                    <p>
                        {!! $event->content->content !!}
                    </p>
                </div>
                <!-- END Event Data -->
                
                <!-- Topics -->
                <div>
                    <!-- Header -->
                        <x-texts.titles.section-title-a :title="__('words.topics')" />
                    <!-- END Header -->
                    <!-- Topic List -->
                        <x-cards.events.event-topic-card-a >
                        </x-cards.events.event-topic-card-a >
                    <!-- END Topic List -->
                </div>
                <!-- END Topics -->
            </div>
            
        </x-slot>
        <x-slot name="rightSide">
            Left Side
        </x-slot>
    </x-templates.pages.page-container-2xl-left-main-right-a>
</x-layouts.main>