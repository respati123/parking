<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicles_type extends Model
{
    protected $fillable = [
        'name',
        'created_at',
        'created_by',
        'modifier_at',
        'modifier_by'
    ];
}
