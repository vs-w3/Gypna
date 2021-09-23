<?php

namespace App\Http\Livewire\Tables;

use App\Models\Event as ModelsEvent;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\TimeColumn;

class Event extends LivewireDatatable
{

    public function builder()
    {
        return ModelsEvent::join('event_translations', 'events.id', '=', 'event_translations.event_id')
            ->where('event_translations.locale', app()->getlocale());
    }

    public function columns()
    {
        return [

            Column::callback(['id'], function($id){
                    return '
                        <a class="mx-2 text-lg inline-block" href="' . route('app-event-show', [app()->getlocale(), $id]) . '"><i class="' . config('icons.fa.eye_r') . '"></i></a>
                        <a class="mx-2 text-lg inline-block" href="events/edit/' . $id . '"><i class="' . config('icons.fa.edit') . '"></i></a>
                        <a class="mx-2 text-lg inline-block" href="events/delete/' . $id . '"><i class="' . config('icons.fa.delete') . '"></i></a>';
                })
                ->label(__('words.actions'))
                ->width(170),
                
            NumberColumn::name('id') 
                ->defaultSort('asc')
                ->searchable()
                ->width(10),

            Column::name('event_translations.name')
                ->searchable()
                ->filterable()
                ->label(__('words.name')),

            DateColumn::name('event_start as start_date')
                ->label(__('words.start'))
                ->width(30),

            TimeColumn::name('event_start as start_time')
                ->label(__('words.start'))
                ->width(30),

            DateColumn::name('event_end as end_date')
                ->label(__('words.end'))
                ->width(30),

            TimeColumn::name('event_end as end_time')
                ->label(__('words.end'))
                ->width(30),

            BooleanColumn::name('active')
                ->label(__('words.active'))
                ->searchable()
                ->width(20),
        ];
    }
}
