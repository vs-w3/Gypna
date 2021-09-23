<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addressable extends Model
{
    use HasFactory;
    protected $fillable = ['address_id', 'addressable_id', 'addressable_type'];
}
