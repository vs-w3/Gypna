<?php

namespace App\Http\Livewire\Features\Address;

use App\Managers\AddressManager;
use Livewire\Component;
use App\Models\Region;
use App\Models\AddressType;
use App\Models\City;

class Address extends Component
{
    /**
     * Listeners
     */
    protected $listeners = [
        // Init Data  
        'initRecordArray' => 'initRecordArray',
        'resetRecordData' => 'resetRecordData',

        // CRUD
        'addRecord'      => 'addRecord',
        'editRecord'     => 'editRecord',
        'deleteRecord'   => 'deleteRecord',

        // DOM
        'updateDOM' => 'updateDOM'
    ];

     /**
     * Validation rules
     */
    protected $rules = [
        'record.addressable_id'   => 'required|integer',
        'record.addressable_type' => 'required|string',
        'record.address_type_id'  => 'required|integer',
        'record.region_id'        => 'required|integer',
        'record.city_id'          => 'required|integer',
        'record.postal_code'      => 'required|integer',
        'record.public'           => 'required|boolean',
        'record.body'             => 'required|string',
    ];

    /**
     * Override validated fields name, for validation message
     */
    protected $validationAttributes = [
        'record.body' => 'address'
    ];

    /**
     * Feature's views
     */
    protected $views = [
        'profile_address_section'       => 'livewire.features.address.r.address',
        'event_admin_address_section'   => 'livewire.features.address.r.address-admin-event',
        'edit_address'                  => 'livewire.features.address.cud.edit-address',
        'add_address'                   => 'livewire.features.address.cud.add-address',
        'delete_address'                => 'livewire.features.address.cud.delete-address',
    ];

    /**
     * Addressables
     */
    protected $addressables = [
        'User' => 'App\Models\User',
        'Event' => 'App\Models\Event',
        'PersonProfile' => 'App\Models\PersonProfile'
    ];

    /**
     * view key
     */
    public $view;

    /**
     * Addressable Model
     */
    public $addressable;

    /**
     * Address
     */
    public $address;

    /**
     * Model Wire Data
     */
    public $record = [
        'addressable_id' => null,
        'addressable_type' => null,
        'id' => null,
        //Bindable Data
        'region_id' => null,
        'city_id' => null,
        'postal_code' => null,
        'body' => null,
        'public' => 0,
        'address_type_id' => null
    ];

    /**
     * Data For Modal
     */
    public $mdata = [
        'regions' => [],
        'cities' => [],
        'address_types' => []
    ];

    /**
     * View Data
     */
    public $actualAddresses;
    public $legalAddresses;



    public function mount($view, $addressable = null, $address = null)
    { 
        $this->view = $view;
        $this->addressable = $addressable;
        $this->address = $address;
        // Modal Data
        $this->mdata['regions'] = Region::all();
        $this->mdata['address_types'] = AddressType::all();

        // Retrieve Actual and Legal Addresses
        $this->getAddresses();
    }


    //--------------------------------------------------------------------------------------
    //----- CRUD
    //--------------------------------------------------------------------------------------

    public function addRecord()
    {
        
        $this->validate();
        //dd($this->addressable);
        AddressManager::addAddress(
            $this->addressable,
            //$this->addressables[class_basename($this->addressable)],
            $this->record['region_id'], //+
            $this->record['city_id'], //+
            $this->record['address_type_id'], //+
            $this->record['postal_code'], //+
            $this->record['public'], //+
            $this->record['body'], //+
        );  
        
        // Update DOM
        $this->emitUp('updateDOM');
    }

    public function editRecord()
    {     
        $this->validate([
            'record.address_type_id'  => 'required|integer',
            'record.region_id'        => 'required|integer',
            'record.city_id'          => 'required|integer',
            'record.postal_code'      => 'required|integer',
            'record.public'           => 'required|boolean',
            'record.body'             => 'required|string',
        ]);
        AddressManager::updateAddress(
            $this->record['id'],
            $this->record['region_id'],
            $this->record['city_id'],
            $this->record['address_type_id'],
            $this->record['postal_code'],
            $this->record['public'],
            $this->record['body'],
        );
        
        // Update DOM
        $this->emitUp('updateDOM');
    }

    public function deleteRecord()
    {
        $address = \App\Models\Address::findOrFail($this->record['id']);
        $address->delete();

        // Update DOM
        $this->emitUp('updateDOM');
    }

    //--------------------------------------------------------------------------------------
    //----- EVENTS
    //--------------------------------------------------------------------------------------

    public function updateDOM()
    {
        $this->getAddresses();
    }
    public function initRecordArray()
    {
        if($this->address) {
            $this->record['addressable_id']   = $this->address->addressable_id;
            $this->record['addressable_type'] = $this->address->addressable_type;
            $this->record['id']               = $this->address->id;
            $this->record['region_id']        = $this->address->region_id;
            $this->trigerCities();
            $this->record['city_id']          = $this->address->city_id;
            $this->record['postal_code']      = $this->address->postal_code;
            $this->record['body']             = $this->address->body;
            $this->record['public']           = $this->address->public;
            $this->record['address_type_id']  = $this->address->address_type_id; 
        } else {
            $this->record['addressable_id']   = $this->addressable->id;
            $this->record['addressable_type'] = $this->addressables[ class_basename($this->addressable)];
            $this->mdata['cities'] = [];
            $this->record['id'] = null;
            $this->record['region_id'] = null;
            $this->record['city_id'] = null;
            $this->record['postal_code'] = null;
            $this->record['body'] = null;
            $this->record['public'] = false;
            $this->record['address_type_id'] = null;  
        } 
    }


    //--------------------------------------------------------------------------------------
    //----- Hooks
    //--------------------------------------------------------------------------------------
    

    /**
     * Live validation
     * 
     * @param @propertyName
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    /**
     * Eevery time region is updated, we need to reset city's livebinding data
     */
    public function updatedRecordRegionId($value)
    {
        $this->record['city_id'] = null;
        $this->trigerCities();
    }


    //--------------------------------------------------------------------------------------
    //----- Other
    //--------------------------------------------------------------------------------------

    
    public function getAddresses()
    {   
        $this->actualAddresses = AddressManager::getAddresses($this->addressable, $this->addressable, 'current'); 
        $this->legalAddresses = AddressManager::getAddresses($this->addressable, $this->addressable, 'legal'); 
    }
    

    public function trigerCities()
    {
        if(!empty($this->record['region_id'])) {
            $this->mdata['cities'] = City::where('region_id', $this->record['region_id'])->get();
        }
    }

    



    //--------------------------------------------------------------------------------------
    //----- Render
    //--------------------------------------------------------------------------------------

    public function render()
    {
        $this->trigerCities();
        if(array_key_exists($this->view, $this->views)) {
           return view($this->views[$this->view]);
        }
    }
}
