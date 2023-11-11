<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function medicalRecords()
    {
        return $this->hasMany(MedicalRecord::class);
        // You can define other relationships if needed
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
        // You can define other relationships if needed
    }
}

