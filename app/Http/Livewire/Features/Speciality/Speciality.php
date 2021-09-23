<?php

namespace App\Http\Livewire\Features\Speciality;

use App\Managers\SpecialityManager;
use Livewire\Component;

class Speciality extends Component
{

    /**
     * Feature's views
     */
    protected $views = [
        'profile_speciality_section' => 'livewire.features.speciality.r.speciality',
        'add_speciality'             => 'livewire.features.speciality.cud.add-speciality',
        'delete_speciality'             => 'livewire.features.speciality.cud.delete-speciality'
    ];

    /*
     * Listeners
     */
    protected $listeners = [
        // Init Data  
        'initRecordArray' => 'initRecordArray',
        //'resetRecordData' => 'resetRecordData',

        // CRUD
        'addRecord'      => 'addRecord',
        //'editRecord'     => 'editRecord',
        'deleteRecord'   => 'deleteRecord',

        // DOM
        'updateDOM' => 'updateDOM'
    ];

    /**
     * Specialityables
     */
    protected $specialityables = [
        'User' => 'App\Models\User'
    ];


     /**
     * view key
     */
    public $view;

    /**
     * Specialityable Model
     */
    public $specialityable;

    /**
     * Speciality Model
     */
    public $speciality;

    /**
     * Data For Modal
     */
    public $mdata = [
        'specialities' => []
    ];

    /**
     * Record Data
     */
    public $record = [];

    /**
     * Specialities that are not owned by specialityable
     */
    public $unOwnedSpecialities;

    /**
     * Specialities that are owned by specialityable
     */
    public $ownedSpecialities;

    public function mount($view, $specialityable = null, $speciality = null)
    {
        $this->view = $view;
        $this->specialityable = $specialityable;
        $this->speciality = $speciality;

        $this->unOwnedSpecialities();
    }

    //--------------------------------------------------------------------------------------
    //----- CRUD
    //--------------------------------------------------------------------------------------

    public function addRecord()
    {
        SpecialityManager::giveSpecialityTo($this->specialityable, array_keys($this->record));
        $this->record = [];

        // Update DOM
        $this->emitUp('updateDOM');
    }

    public function deleteRecord()
    {
        SpecialityManager::deleteSpeciality($this->specialityable, $this->record['speciality_id']);

        session()->flash('message', 'Post successfully updated.');  
        // Update DOM
        $this->emitUp('updateDOM');

        
    }


    //--------------------------------------------------------------------------------------
    //----- EVENTS
    //--------------------------------------------------------------------------------------

    public function initRecordArray()
    {
        if($this->speciality) {
            $this->record['speciality_id'] = $this->speciality->id;
        } else {
            $this->record = [];
            $this->unOwnedSpecialities();
        }
        
    }

    public function updateDOM()
    {
        $this->ownedSpecialities();
        session()->flash('message', 'Post successfully updated.');  
    }

    //--------------------------------------------------------------------------------------
    //----- OTHER
    //--------------------------------------------------------------------------------------

    protected function unOwnedSpecialities()
    {
        $this->unOwnedSpecialities = SpecialityManager::getUnOwnedSpecialities($this->specialityable);
    }

    protected function ownedSpecialities()
    {
        $this->ownedSpecialities = $this->specialityable->specialities;
    }

    //--------------------------------------------------------------------------------------
    //----- Render
    //--------------------------------------------------------------------------------------
    public function render()
    {
        if(array_key_exists($this->view, $this->views)) {

            return view($this->views[$this->view]);
 
         }
    }
}
