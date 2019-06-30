<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{

    public function patient(){
        
        return $this->hasMany('App\Patient','fk_id_doctor');
    }

    public function consultations()
    {
        return $this->hasMany('App\MedicalConsultation', 'fk_id_doctor');
    }

    protected $fillable = [
        'fk_id_user',
        'cpf',
        'crm'
    ];
}
