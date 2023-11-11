<?php

namespace Database\Seeders;

use App\Models\MedicalRecord;
use Illuminate\Database\Seeder;
use App\Models\Patient;
use App\Models\Doctor; // Correct the namespace here
use App\Models\Nurse;

class MedicalRecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Adjust as needed
        Patient::all()->each(function ($patient) {
            $doctor = Doctor::inRandomOrder()->first();
            $nurse = Nurse::inRandomOrder()->first();

            if ($doctor && $nurse) {
                MedicalRecord::factory()->count(5)->create([
                    'patient_id' => $patient->id,
                    'doctor_id' => $doctor->id,
                    'nurse_id' => $nurse->id,
                ]);
            }
        });
    }
}
