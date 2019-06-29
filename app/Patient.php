<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'fk_id_doctor',
        'name',
        'birthday',
        'phone'
    ];

    
}
