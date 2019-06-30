<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MedicalConsultation;

class Prescription extends Model
{
    protected $fillable = [
        'fk_id_medical_consultations',
        'shelf_life',
        'drug_name',
        'frequency',
        'total',
        'last_alert'
    ];

    public function prescriptions()
    {
        return $this->hasMany(MedicalConsultation::class, 'fk_id_medical_consultations', 'id');
    }
}
