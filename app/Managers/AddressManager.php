<?php

namespace App\Managers;

use App\Models\Address;
use App\Models\Addressable;
use App\Models\AddressType;
use Illuminate\Support\Facades\DB;

class AddressManager
{
    /**
     * Get Addresable Model Type
     * 
     * @param object $model
     * @return string
     */
    public static function getAddresableType($model)
    {
        return is_object($model) ? get_class($model) : false; 
    }

    /**
     * Get Addresses
     * 
     * @param App\Model\User $user;
     * @param object $addressable;
     * @param string $type [legal|actual]
     * @return Illuminate\Database\Eloquent\Collection $addresses
     */
    public static function getAddresses($user, $addressable, $type = 'current')
    {
        $addresses = [];
        $address_type = AddressType::where('identifier', $type)->first()->id;
        if(auth()->check() and auth()->user()->id === $user->id) {
            $addresses = $addressable->addresses->where('address_type_id', $address_type);
        } else { 
            $addresses = $addressable->addresses->where('address_type_id', $address_type)->where('public', 1);
        }
        return $addresses;      
    }
    /**
     * Add Address
     * 
     * @param object $addressable
     * @param integer $region_id
     * @param integer $city_id
     * @param integer $address_type_id
     * @param string $postal_code
     * @param string $address
     */
    public static function addAddress($addressable, $region_id, $city_id, $address_type_id, $postal_code, $public, $body)
    {
        $address = new Address();
        $address->region_id          = $region_id;
        $address->city_id            = $city_id;
        $address->address_type_id    = $address_type_id;
        $address->postal_code        = $postal_code;
        $address->public             = $public;
        $address->getTranslationOrNew('ka')->body = $body;
        $address->save();

        $addressablePK = new Addressable();
        $addressablePK->address_id = $address->id;
        $addressablePK->addressable_id = $addressable->id;
        $addressablePK->addressable_type = self::getAddresableType($addressable);
        $addressablePK->save();
    }

    /**
     * Update Address
     * 
     * @param integer $id
     * @param integer $region_id
     * @param integer $city_id
     * @param integer $address_type_id
     * @param string $postal_code
     * @param string $address
     */
    public static function updateAddress($id, $region_id, $city_id, $address_type_id, $postal_code, $public, $body)
    {
        $address = Address::findOrFail($id);
        $address->region_id          = $region_id;
        $address->city_id            = $city_id;
        $address->address_type_id    = $address_type_id;
        $address->postal_code        = $postal_code;
        $address->public             = $public;
        $address->getTranslationOrNew('ka')->body = $body;
        $address->save();
    }
}