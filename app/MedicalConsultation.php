<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalConsultation extends Model
{

    public function prescription()
    {
        return $this->hasMany('App\Prescription', 'fk_id_medical_consultations');
    }
    
    protected $fillable = [
        'fk_id_doctor',
        'fk_id_patient',
        'start',
        'end',
        'type',
        'observations'
    ];
}
