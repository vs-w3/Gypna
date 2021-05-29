<?php

namespace App\Http\Livewire\Sections\Profile;

use Livewire\Component;
use App\Models\Speciality as SpecialityModel;
use App\Models\SpecialityUser;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class Speciality extends Component
{
    protected $listeners = [
        'addUserSpeciality'      => 'addUserSpeciality',
        'deleteUserSpeciality'   => 'deleteUserSpeciality',
        'getSpecialities'        => 'getSpecialities'
    ];
    public $user;

    public $title;
    public $addButtonLink;
    public $specialities;
    public $userSpeciality = [];

    

    public function mount($title)
    {
        $this->user = auth()->user();
        $this->title = $title;
        $this->addButtonLink = 'add/user/speciality';
    }
    // Methods
    public function addUserSpeciality()
    {
        foreach($this->userSpeciality as $speciality)
        {
            SpecialityUser::create([
                'speciality_id' => $speciality,
                'user_id' => $this->user->id,
            ]);
        }
        $this->userSpeciality = [];
    }

    public function deleteUserSpeciality($id)
    {
        $speciality = SpecialityUser::findOrFail($id);
        $speciality->delete();
    }

    public function getSpecialities()
    { 
        if($this->user->specialities->first())
        {
            $userSpeciality = array_values(SpecialityUser::where('user_id', $this->user->id)->select('speciality_id')->get()->toArray());
            $userSpeciality = Arr::pluck($userSpeciality, 'speciality_id');
            $this->specialities = SpecialityModel::all()->except($userSpeciality);
        } else {
            $this->specialities = SpecialityModel::all();
        }
        
    }

    public function render()
    {
        return view('livewire.sections.profile.speciality');
    }
}
