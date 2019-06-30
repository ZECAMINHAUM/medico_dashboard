<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Doctor;
use App\Patient;

class MedicalConsultation extends Model
{

    /*public function prescription()
    {
        return $this->hasMany('App\Prescription', 'fk_id_medical_consultations');
    }*/
    
    protected $fillable = [
        'fk_id_doctor',
        'fk_id_patient',
        'start',
        'end',
        'type',
        'observations'
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'fk_id_doctor', 'id');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'fk_id_patient', 'id');
    }

    public function consultationPrescriptions()
    {
        return $this->hasMany(Prescription::class, 'fk_id_medical_consultations', 'id');
    }
}
