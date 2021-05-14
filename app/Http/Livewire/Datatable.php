<?php

namespace App\Http\Livewire;

use App\Models\Speciality;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Datatable extends Component
{
    protected $model;

    protected $data;
    public $setting;

    public function mount($model, $setting)
    {
        $this->model = $model;
        $this->setting = $setting;
        $this->initData();
    }

    protected function initData()
    {
        app()->setlocale('ka');
        $this->data = $this->model->all();
        //dd($this->model->first()->getTranslationsArray());
        //dd($this->data);
    }
    public function render()
    {
        
        return view('livewire.datatable')
            ->with('collection', $this->data);
    }
}
