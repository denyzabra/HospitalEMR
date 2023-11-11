<?php



namespace Database\Factories;

use App\Models\MedicalRecord;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicalRecordFactory extends Factory
{
    protected $model = MedicalRecord::class;

    public function definition()
    {
        return [
            'patient_id' => \App\Models\Patient::factory(),
            'doctor_id' => \App\Models\Doctor::factory(),
            'nurse_id' => \App\Models\Nurse::factory(),
            'symptoms' => $this->faker->text,
            'lab_tests' => $this->faker->text,
            'medical_condition' => $this->faker->word,
            'treatment' => $this->faker->text,
            'outcome' => $this->faker->word,
            'visit_date' => $this->faker->date,
        ];
    }
}
