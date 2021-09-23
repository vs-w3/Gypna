<?php

namespace App\Http\Livewire\Features\File;

use App\Managers\FileManager;
use Livewire\Component;
use Livewire\WithFileUploads;
use stdClass;

class File extends Component
{

    use WithFileUploads;

    /**
     * Listeners
     */
    protected $listeners = [
        // Init Data  
        'initRecordArray' => 'initRecordArray',
        //'resetRecordData' => 'resetRecordData',

        // CRUD
        //'addRecord'      => 'addRecord',
        //'editRecord'     => 'editRecord',
        //'deleteRecord'   => 'deleteRecord',

        // DOM
        'updateDOM' => 'updateDOM'
    ];

    /**
     * Fileable Model Instance
     */
    public $fileable;

    /**
     * Single File Binding
     */
    public $singleFile = [
        'old' => null,
        'tmp' => null,
        'new' => null,
    ];



    public function mount($fileable)
    {
        $this->fileable = $fileable;
        $this->updateDOM();
    }

    //--------------------------------------------------------------------------------------
    //----- Other
    //--------------------------------------------------------------------------------------


    protected function initRecordArray()
    {
        $this->singleFile['old'] = FileManager::getPublicImage($this->fileable, 'img');
    }

    //--------------------------------------------------------------------------------------
    //----- Events
    //--------------------------------------------------------------------------------------

    public function updatedSinglefileNew()
    {
        FileManager::savePublicImage($this->fileable, 'img', $this->singleFile['new']);
        // Update DOM
        $this->emitSelf('updateDOM');
    }

    public function updateDOM()
    {
        $this->initRecordArray();
    }


    public function render()
    {
        return view('livewire.features.file.file');
    }
}
