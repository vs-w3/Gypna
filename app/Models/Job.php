<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    // Relationships
    public function profile()
    {
        return $this->belongsTo(PersonProfile::class);
    }
    
    public function address()
    {
        return $this->morphMany(Address::class, 'addressable');
    }
}
