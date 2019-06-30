<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Doctor;
use App\MedicalConsultation;

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

    public function patientConsultations()
    {
        return $this->hasMany(MedicalConsultation::class, 'fk_id_patient', 'id');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'fk_id_doctor', 'id');
    }

    
}
