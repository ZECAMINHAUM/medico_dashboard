<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    protected $fillable = [
        'fk_id_medical_consultations',
        'shelf_life',
        'drug_name',
        'last_alert'
    ];
}
