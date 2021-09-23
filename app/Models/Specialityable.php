<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialityable extends Model
{
    use HasFactory;

    protected $fillable = ['speciality_id', 'specialityable_id', 'specialityable_type'];
}
