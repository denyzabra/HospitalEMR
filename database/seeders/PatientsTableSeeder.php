<?php



namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;

class PatientsTableSeeder extends Seeder
{
    public function run()
    {
        \Database\Factories\PatientFactory::new()->count(10000)->create();
    }
}
