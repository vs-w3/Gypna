<?php

namespace App\Managers;

use App\Models\CompanyProfile;
use App\Models\PersonProfile;
use Illuminate\Support\Facades\Validator;

class ProfileManager
{
    /**
     * Return Profile Navigation Component name by user's userable_type
     * 
     * @param string $userable_type
     * @return string 
     */
    public static function navComponent($userable_type) : string
    {
        return config('user.profile.' . $userable_type . '.nav_component');
    }

    /**
     * Return Profile Main Component name by user's userable_type
     * 
     * @param string $userable_type
     * @return string 
     */
    public static function mainComponent($userable_type) : string
    {
        return config('user.profile.' . $userable_type . '.main_component');
    }

    /**
     * Create User Profile
     * 
     * @param string $userable_type
     * @return $id 
     */
    public static function createProfile($userable_type, $input)
    {
        $locale = app()->getlocale();
        $id = null;
        if($userable_type == 'PersonProfile') {
            Validator::make($input, [
                'person_name' => ['required', 'string'],
                'person_lastname' => ['required', 'string'],
            ]);
            $profile = new PersonProfile();
            $profile->translateOrNew($locale)->name = $input['person_name'];
            $profile->translateOrNew($locale)->lastname = $input['person_lastname'];
            $profile->save();
            $id = $profile->id;
        } elseif($userable_type == 'CompanyProfile') {
            Validator::make($input, [
                'company_name' => ['required', 'string'],
            ]);
            $profile = new CompanyProfile();
            $profile->translateOrNew($locale)->name = $input['company_name'];
            $profile->save();
            $id = $profile->id;
        }
        return $id;
    }
}