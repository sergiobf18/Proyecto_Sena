<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
   
    use HasFactory;

    // Si hay una relación inversa, se puede definir aquí
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
