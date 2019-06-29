<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalConsultation extends Model
{
    protected $fillable = [
        'fk_id_doctor',
        'fk_id_patient',
        'start',
        'end',
        'type',
        'observations'
    ];
}
