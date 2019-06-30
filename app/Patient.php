<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{

    public function consultations()
    {
        return $this->hasMany('App\MedicalConsultation', 'fk_id_patient');
    }
    protected $fillable = [
        'fk_id_doctor',
        'name',
        'birthday',
        'phone'
    ];

    
}
