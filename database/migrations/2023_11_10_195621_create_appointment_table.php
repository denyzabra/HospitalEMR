<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('doctor_id')->nullable();
            $table->unsignedBigInteger('nurse_id')->nullable();
            $table->text('clinical_notes');
            $table->date('appointment_date');
            $table->time('appointment_time');
            $table->boolean('completed')->default(false);
            $table->timestamps();

            $table->foreign('patient_id')->references('id')->on('patients');
            
            // Reference the 'doctors' table conditionally
            if (Schema::hasTable('doctors')) {
                $table->foreign('doctor_id')->references('id')->on('doctors');
            }

            // Reference the 'nurses' table conditionally
            if (Schema::hasTable('nurses')) {
                $table->foreign('nurse_id')->references('id')->on('nurses');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment');
    }
};
