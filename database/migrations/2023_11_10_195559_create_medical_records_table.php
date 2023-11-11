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
        Schema::create('medical_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('doctor_id')->nullable();
            $table->unsignedBigInteger('nurse_id')->nullable(); // Make it nullable
            $table->text('symptoms');
            $table->text('lab_tests');
            $table->string('medical_condition');
            $table->text('treatment');
            $table->string('outcome');
            $table->date('visit_date');
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
        Schema::dropIfExists('medical_records');
    }
};
