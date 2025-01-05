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
        Schema::create('cek_ginjal', function (Blueprint $table) {
            $table->id('cek_id'); // cek_id sebagai primary key
            $table->unsignedBigInteger('user_id'); // kolom foreign key
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // foreign key yang mengarah ke users
            $table->float('age'); // Usia
            $table->float('bp', 8, 2);  // Blood Pressure
            $table->float('bgr', 8, 2); // Blood Glucose Random
            $table->float('rc', 8, 2);  // Red Cell Count
            $table->float('sg', 8, 2);  // Specific Gravity
            $table->float('bu', 8, 2);  // Blood Urea
            $table->enum('htn', ['yes', 'no']);  // Hipertensi
            $table->float('al');  // Albumin
            $table->float('su');  // Sugar
            $table->enum('sc', ['yes', 'no']);  // Serum Creatinine
            $table->float('sod');  // Sodium
            $table->float('pot');  // Potassium
            $table->enum('rbc', ['normal', 'abnormal']);  // Red Blood Cells
            $table->enum('pc', ['normal', 'abnormal']);  // White Blood Cells
            $table->enum('pcc', ['present', 'notpresent']);  // Pus Cell Clumps
            $table->enum('ba', ['present', 'notpresent']);  // Bacteria
            $table->float('hemo');  // Hemoglobin
            $table->integer('pcv');  // Packed Cell Volume
            $table->integer('wc');  // White Blood Cell Count
            $table->enum('dm', ['yes', 'no']);  // Diabetes Mellitus
            $table->enum('cad', ['yes', 'no']);  // Coronary Artery Disease
            $table->enum('appet', ['good', 'poor']);  // Nafsu makan
            $table->enum('pe', ['yes', 'no']);  // Edema
            $table->enum('ane', ['yes', 'no']);  // Anemia
            $table->enum('classification', ['ckd', 'normal']);  // Klasifikasi
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('cek_ginjal');
    }
};
