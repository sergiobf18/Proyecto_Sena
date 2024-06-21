<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'Document_type', 'Document_number', 'name', 'last_name', 'second_last_name', 'email', 'phone_number'
    ];

    use HasFactory;

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'idPatient');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
