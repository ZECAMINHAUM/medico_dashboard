<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;
use App\MedicalConsultation;
use App\Prescription;

class Doctor extends Model
{

    //Lucas
    /*public function patient(){
        
        return $this->hasMany('App\Patient','fk_id_doctor');
    }

    public function consultations()
    {
        return $this->hasMany('App\MedicalConsultation', 'fk_id_doctor');
    }*/


    protected $fillable = [
        'fk_id_user',
        'cpf',
        'crm'
    ];

    public function doctorPatients()
    {
        return $this->hasMany(Patient::class, 'fk_id_doctor', 'id'); //hasMany Muitos para 1
    }

    public function doctorConsultations()
    {
        return $this->hasMany(MedicalConsultation::class, 'fk_id_doctor', 'id');
    }
}
