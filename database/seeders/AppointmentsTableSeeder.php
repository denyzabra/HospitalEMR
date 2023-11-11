<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Nurse;

class AppointmentsTableSeeder extends Seeder
{
    public function run()
    {
        Patient::all()->each(function ($patient) {
            Appointment::factory()->count(2)->create([
                'patient_id' => $patient->id,
                'doctor_id' => Doctor::inRandomOrder()->first()->id,
                'nurse_id' => Nurse::inRandomOrder()->first()->id,
            ]);
        });
    }
}
