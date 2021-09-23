<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Address extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    
    public $translatedAttributes = ['body'];
    protected $fillable = ['address_type_id','addressable_id', 'addressable_type', 'region_id', 'city_id', 'postal_code', 'public'];


    // Relationships
    /*
    public function addressable()
    {
        return $this->morphTo();
    }*/

    public function profiles()
    {
        return $this->morphedByMany(PersonProfile::class, 'addressable');
    }

    public function events()
    {
        return $this->morphedByMany(Event::class, 'addressable');
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function address_type()
    {
        return $this->belongsTo(AddressType::class);
    }
}
