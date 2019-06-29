<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'fk_id_user',
        'cpf',
        'crm'
    ];
}
