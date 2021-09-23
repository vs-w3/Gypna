<?php

namespace App\Managers;

use App\Models\Speciality;
use App\Models\Specialityable;

class SpecialityManager
{
    static protected $specialityableTypes = [
        'user' => 'App\Models\User'
    ];


    /**
     * Get Specialityable model's type/namespace
     * 
     * @param object $specialityable
     */
    public static function getSpecialityableType($specialityable)
    {
        return $model = get_class($specialityable);
    }


    /**
     * Get All Specialities
     * 
     */
    public static function getSpecialities()
    {
        return Speciality::all();
    }


    /**
     * Get Specialities That are owned by Specialityable object
     * 
     * @param object $model // specialityable model instance
     */
    public static function getOwnedSpecialities($model)
    {
        return $model->specialities;
    }

    /**
     * Get Unowned specialities of given specialityable model instance
     * 
     * @param object $model // specialityable model instance
     */
    public static function getOwnedSpecialitiesIDArray($model)
    {
        $ownedSpecialityIDArray = Specialityable::select('speciality_id')->where('specialityable_id', $model->id)->get();
        return array_values($ownedSpecialityIDArray->toArray());

    }

    /**
     * Get Specialities That are owned by Specialityable object
     * 
     * @param object $model // specialityable model instance
     */
    public static function getUnOwnedSpecialities($model)
    {
        $keies = self::getOwnedSpecialitiesIDArray($model);
        $unOwnedSpecialities = Speciality::whereNotIn('id', $keies)->get();
        return $unOwnedSpecialities;
    }

    /**
     * Give Speciality To Specialityable 
     * 
     * @param object $specialityable
     * @param integer|array $specialityKey
     */
    public static function giveSpecialityTo($specialityable, $specialityKey)
    {
        if(is_int($specialityKey)) {
            $model = new Specialityable();
            $model->speciality_id = $specialityKey;
            $model->specialityable_id = $specialityable->id;
            $model->specialityable_type = self::getSpecialityableType($specialityable);
            $model->save();
        } elseif(is_array($specialityKey)) {
            foreach($specialityKey as $id) {
                $model = new Specialityable();
                $model->speciality_id = $id;
                $model->specialityable_id = $specialityable->id;
                $model->specialityable_type = self::getSpecialityableType($specialityable);
                $model->save();
            }
        }
    }

    /**
     * Delete Speciality
     * 
     * @param object $specialityable
     * @param integer $specialityId
     */
    public static function deleteSpeciality($specialityable, $specialityId)
    {
        $speciality = Specialityable::where('specialityable_id', $specialityable->id)->where('speciality_id', $specialityId)->first();
        $speciality->delete();
    }

}