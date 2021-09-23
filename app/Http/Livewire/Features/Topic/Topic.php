<?php

namespace App\Http\Livewire\Features\Topic;

use Livewire\Component;

class Topic extends Component
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
     * Feature's views
     */
    protected $views = [
        //'event_topic_section'           => 'livewire.features.address.r.address',
        'topic_admin_section'           => 'livewire.features.topic.r.topic-admin-section',
        'edit_topic'                    => 'livewire.features.topic.cud.edit-topic',
        'add_topic'                     => 'livewire.features.topic.cud.add-topic',
        'delete_topic'                  => 'livewire.features.topic.cud.delete-topic',
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
     * Event Model
     */
    public $event;


    /**
     * view key
     */
    public $view;

    /**
     * topic
     */
    public $topic;

    /**
     * Model Wire Data
     */
    public $record = [
        'topic_description_ka' => null
    ];

    /**
     * Data For Modal
     */
    public $mdata = [
        'addresses' => []
    ];



    public function mount($view, $event = null, $topic = null)
    { 
        $this->view = $view;
        $this->event = $event;
        $this->topic = $topic;
        // Modal Data


    }

    //--------------------------------------------------------------------------------------
    //----- CRUD
    //--------------------------------------------------------------------------------------

    public function addRecord()
    {
        dd($this->record);
        $this->validate();
        
        
        // Update DOM
        $this->emitUp('updateDOM');
    }

    public function editRecord()
    {
        dd('edit topic');
        $this->validate([
            'record.address_type_id'  => 'required|integer',
            'record.region_id'        => 'required|integer',
            'record.city_id'          => 'required|integer',
            'record.postal_code'      => 'required|integer',
            'record.public'           => 'required|boolean',
            'record.body'             => 'required|string',
        ]);
        
        
        // Update DOM
        $this->emitUp('updateDOM');
    }

    public function deleteRecord()
    {
        dd('delete topic');

        // Update DOM
        $this->emitUp('updateDOM');
    }

    //--------------------------------------------------------------------------------------
    //----- EVENTS
    //--------------------------------------------------------------------------------------

    public function updateDOM()
    {
       
    }
    public function initRecordArray()
    {
        if($this->topic) {
            $this->record['id']               = $this->topic->id;
            $this->record['event_id']         = $this->topic->event_id;
            $this->record['topic_start']      = $this->topic->topic_start;
            $this->record['topic_end']        = $this->topic->topic_end;
            $this->record['break']            = $this->topic->break;
            $this->record['active']           = $this->topic->active;
        } else {
            $this->record['id']               = null;
            $this->record['event_id']         = $this->event->id;
            $this->record['topic_start']      = null;
            $this->record['topic_end']        = null;
            $this->record['break']            = null;
            $this->record['active']           = null; 
        } 
    }

    public function render()
    {
        if(array_key_exists($this->view, $this->views)) {
            return view($this->views[$this->view]);
         }
    }
}
