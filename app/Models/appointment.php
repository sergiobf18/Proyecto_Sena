<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected
 $fillable = [
        'idPatient', // Assuming you have an idPatient foreign key
        'idPsychologist', // Assuming you have an idPsychologist foreign key
        'appointment_date',
        'appointment_status',
        'notes',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'idPatient');
    }

    public function psychologist()
    {
        return $this->belongsTo(Psychologist::class, 'idPsychologist');
    }
}
