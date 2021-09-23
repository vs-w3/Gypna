<?php

namespace App\Http\Livewire\Tables;

use App\Models\Speciality as ModelsSpeciality;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\TimeColumn;

class Speciality extends LivewireDatatable
{

    public function builder()
    {
        return ModelsSpeciality::join('speciality_translations', 'specialities.id', '=', 'speciality_translations.speciality_id')
            ->where('speciality_translations.locale', app()->getlocale());
    }

    public function columns()
    {
        return [

            Column::callback(['id'], function($id){
                    return '
                        <a class="mx-2 text-lg inline-block" href="' . route('admin-speciality-edit', [$id]) . '"><i class="' . config('icons.fa.edit') . '"></i></a>
                        <a class="mx-2 text-lg inline-block" href="' . route('admin-speciality-delete', [$id]) . '"><i class="' . config('icons.fa.delete') . '"></i></a>';
                })
                ->label(__('words.actions'))
                ->width(170),
                
            NumberColumn::name('id') 
                ->defaultSort('asc')
                ->searchable()
                ->width(10),

            Column::name('speciality_translations.name')
                ->searchable()
                ->filterable()
                ->label(__('words.name')),

            // BooleanColumn::name('active')
            //     ->label(__('words.active'))
            //     ->searchable()
            //     ->width(20),
        ];
    }

    /*
    public function render()
    {
        return view('livewire.tables.speciality');
    }*/
}
