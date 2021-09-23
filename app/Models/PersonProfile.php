<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class PersonProfile extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    protected $fillable = ['birth_date', 'id_number', 'img'];

    public $translatedAttributes = ['name', 'lastname'];





    // Relationships

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    public function job()
    {
        return $this->hasMany(Job::class);
    }

    public function addresses()
    {
        return $this->morphToMany(Address::class, 'addressable');
    }
}
