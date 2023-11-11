<?php

use Illuminate\Database\Seeder;

use Database\Seeders\PatientsTableSeeder;
use Database\Seeders\MedicalRecordsTableSeeder;
use Database\Seeders\AppointmentsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PatientsTableSeeder::class,
            MedicalRecordsTableSeeder::class,
            AppointmentsTableSeeder::class,
            DoctorSeeder::class, 
            
        ]);
    }
}
