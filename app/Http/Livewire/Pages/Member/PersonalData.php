<?php

namespace App\Http\Livewire\Pages\Member;

use App\Managers\ProfileManager;
use Livewire\Component;
use Symfony\Component\HttpKernel\Profiler\Profile;

class PersonalData extends Component
{
    /**
     * Listeners
     */
    protected $listeners = [
        // Init Data  
        'initRecordArray' => 'initRecordArray',
        //'resetRecordData' => 'resetRecordData',

        // CRUD
        //'addRecord'      => 'addRecord',
        'editRecord'     => 'editRecord',
        //'deleteRecord'   => 'deleteRecord',

        // DOM
        'updateDOM' => 'updateDOM'
    ];
     /**
     * Feature's views
     */
    protected $views = [
        'profile_personal_data'     => 'livewire.pages.member.r.personal-data',
        'edit_personal_data'        => 'livewire.pages.member.u.edit-personal-data',
    ];

    /**
     * view key
     */
    public $view;

     /**
     * User
     */
    public $user;

    /**
     * Model Wire Data
     */
    public $record = [
        'first_name_ka'      => null,
        'first_name_en'      => null,
        'last_name_ka'       => null,
        'last_name_en'       => null,
        'id_number'          => null,
        'birth_date'         => null,
        'public_birth_date'  => null,
        'public_id_number'   => null,
        'email'              => null,
        'img'                => null
    ];


    public function mount($view, $user)
    {
        $this->view = $view;
        $this->user = $user;

        // Init Record 
        $this->initRecordArray();
    }

    //--------------------------------------------------------------------------------------
    //----- CRUD
    //--------------------------------------------------------------------------------------

    public function editRecord()
    {   ProfileManager::changeFirstname($this->user, 'ka', $this->record['first_name_ka']);
        // Change Email
        if($this->record['email'] != $this->user->email) {
            ProfileManager::changeEmail($this->user, $this->record['email']);
        }
        // First Name And Last Name
        ProfileManager::changeFirstname($this->user, 'ka', $this->record['first_name_ka']);
        ProfileManager::changeFirstname($this->user, 'en', $this->record['first_name_en']);
        ProfileManager::changeLastname($this->user, 'ka', $this->record['last_name_ka']);
        ProfileManager::changeLastname($this->user, 'en', $this->record['last_name_en']);
        // ID Number
        ProfileManager::changeIDNumber($this->user, $this->record['id_number']);
        ProfileManager::setVisibility($this->user, 'public_id_number', $this->record['public_id_number']);
        // BD
        ProfileManager::changeBirthDate($this->user, $this->record['birth_date']);
        ProfileManager::setVisibility($this->user, 'public_birth_date', $this->record['public_birth_date']);

        // Update DOM
        $this->emitUp('updateDOM');
    }

    //--------------------------------------------------------------------------------------
    //----- EVENTS
    //--------------------------------------------------------------------------------------

    public function updateDOM()
    {
        $this->initRecordArray();
    }
    public function initRecordArray()
    {
          $this->record['first_name_ka']        = $this->user->userable->getTranslationOrNew('ka')->name;
          $this->record['last_name_ka']         = $this->user->userable->getTranslationOrNew('ka')->lastname;
          $this->record['first_name_en']        = $this->user->userable->getTranslationOrNew('en')->name;
          $this->record['last_name_en']         = $this->user->userable->getTranslationOrNew('en')->lastname;
          $this->record['id_number']            = $this->user->userable->id_number;
          $this->record['birth_date']           = $this->user->userable->birth_date;
          $this->record['public_id_number']     = $this->user->userable->public_id_number;
          $this->record['public_birth_date']    = $this->user->userable->public_birth_date;
          $this->record['img']                  = $this->user->userable->img;
          $this->record['email']                = $this->user->email;

    }

    public function render()
    {
        if(array_key_exists($this->view, $this->views)) {
            return view($this->views[$this->view]);
        }
    }
}
