<?php

namespace App\Managers;

use App\Models\Address;
use App\Models\CompanyProfile;
use App\Models\PersonProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProfileManager
{



    /**
     * Get Userable Type
     * 
     * @param \App\Models\User $user
     * @return string
     */
    public static function getUserableType($user)
    {
        return get_class($user);
    }

    /**
     * Check auth User Can is owner of profile
     * 
     * @param \App\Models\User $user
     * @return boolean
     */
    public static function checkUserIsProfileOwner($user)
    {
        $res = false;
        if(Auth::check()) {
            $res = $user->id === auth()->user()->id;
        }
        return $res;
    }

    /**
     * Set Visibility
     * 
     * @param \App\Models\User $user
     * @param string $attribute
     * @param string $value
     * @return boolean
     */
    public static function setVisibility($user, $attribute, $value)
    {
        $res = false;
        if(self::checkUserIsProfileOwner($user)) {
            $value = $value ? 1 : 0;
            $user->userable->{$attribute} = $value;
            $res = $user->userable->save();
        }
        return $res;
    }

    /**
     * Update Mail
     * 
     * @param \App\Models\User $user
     * @param string $email
     * @return boolean
     */
    public static function changeEmail($user, $mail)
    {
        $res = false;
        if(self::checkUserIsProfileOwner($user)) {
            $user->email = $mail;
            $res = $user->save();
        }
        return $res;
    }

    /**
     * Change First Name
     * 
     * @param \App\Models\User $user
     * @param string $locale
     * @param string $firstName
     * @return boolean
     */
    public static function changeFirstname($user, $locale, $firstName)
    {
        $res = false;
        if(self::checkUserIsProfileOwner($user) && !empty($firstName)) {
            $user->userable->translateOrNew($locale)->name = $firstName;
            $res = $user->userable->save();
        }
        return $res;
    }

    /**
     * Change Last Name
     * 
     * @param \App\Models\User $user
     * @param string $locale
     * @param string $lastName
     * @return boolean
     */
    public static function changeLastname($user, $locale, $lastName)
    {
        $res = false;
        if(self::checkUserIsProfileOwner($user) && !empty($lastName)) {
            $user->userable->translateOrNew($locale)->lastname = $lastName;
            $res = $user->userable->save();
        }
        return $res;
    }

    /**
     * Change ID Number
     * 
     * @param \App\Models\User $user
     * @param integer $idNumber
     * @return boolean
     */
    public static function changeIDNumber($user, $idNumber)
    {
        $res = false;
        if(self::checkUserIsProfileOwner($user) && !empty($idNumber)) {
            $user->userable->id_number = $idNumber;
            $res = $user->userable->save();
        }
        return $res;
    }

    /**
     * Change Birth Date
     * 
     * @param \App\Models\User $user
     * @param integer $birthDate
     * @return boolean
     */
    public static function changeBirthDate($user, $birthDate)
    {
        $res = false;
        if(self::checkUserIsProfileOwner($user) && !empty($birthDate)) {
            $user->userable->birth_date = $birthDate;
            $res = $user->userable->save();
        }
        return $res;
    }








































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