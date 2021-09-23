<x-layouts.main>
    <x-templates.pages.page-container-2xl-left-main-a>
        <x-slot name="leftSide">
            Left Side
        </x-slot>

        <x-slot name="main">
            @foreach ($events as $event)
            <x-cards.events.event-index-card-a>
                <x-slot name="eventImage">{{ $event->img }}</x-slot>
                <x-slot name="eventID">{{ $event->id }}</x-slot>
                <x-slot name="eventTitle">{{ $event->name }}</x-slot>
                <x-slot name="eventStart">{{ $event->event_start }}</x-slot>
                <x-slot name="eventEnd">{{ $event->event_end }}</x-slot>
                <x-slot name="eventDescription">{!! $event->content !!}</x-slot>

            </x-cards.events.event-index-card-a>

            @endforeach
        </x-slot>
        
    </x-templates.pages.page-container-2xl-left-main-a>
</x-layouts.main>




