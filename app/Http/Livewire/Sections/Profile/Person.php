<?php

namespace App\Http\Livewire\Sections\Profile;

use Livewire\Component;

class Person extends Component
{
    /*
    protected $rules = [
        'data.email' => 'required|email',
        'data.name' => 'required|string',
        'data.lastname' => 'required|string',
    ];
*/
    protected $listeners = [
        'upadeteProfile' => 'updateProfile'
    ];

    public $title;
    public $user;
    public $data = [
        'id_number'   => null,
        'birth_date'  => null,
        'email'       => null,
        'name'        => null,
        'lastname'    => null,
    ];

    



    public function mount($title)
    {
        $this->title = $title;
        $this->user = auth()->user();

        $this->data['id_number']   = $this->user->userable->id_number;
        $this->data['birth_date']  = $this->user->userable->birth_date;
        $this->data['email']       = $this->user->email;
        $this->data['name']        = $this->user->userable->name;
        $this->data['lastname']    = $this->user->userable->lastname;
   

    }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, ['data.name'         => 'required|string|min:3']);
        $this->validateOnly($propertyName, ['data.lastname'     => 'required|string|min:3']);
        $this->validateOnly($propertyName, ['data.email'        => 'required|email']);
        $this->validateOnly($propertyName, ['data.id_number'    => 'sometimes|integer']);
        $this->validateOnly($propertyName, ['data.birth_date'   => 'sometimes|date']);
    }


    public function updateProfile()
    {
        // User
        $this->user->email      = $this->data['email'];
        $this->user->save();

        // Profile
        $profile = $this->user->userable;
        $profile->name          = $this->data['name'];
        $profile->lastname      = $this->data['lastname'];
        $profile->id_number     = $this->data['id_number'];
        $profile->birth_date    = $this->data['birth_date'];
        $profile->save();
    }

/*
    public function render()
    {
        return view('livewire.sections.profile.person');
    }*/
}
