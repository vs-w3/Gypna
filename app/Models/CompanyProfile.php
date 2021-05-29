<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class CompanyProfile extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    protected $fillable = ['tax_id', 'img'];
    
    public $translatedAttributes = ['name', 'description'];


    // Relationships

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    public function address()
    {
        return $this->morphMany(Address::class, 'addressable');
    }
}
