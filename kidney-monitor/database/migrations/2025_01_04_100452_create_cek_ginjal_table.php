<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCekGinjalTable extends Migration
{
    public function up()
    {
        Schema::create('cek_ginjal', function (Blueprint $table) {
            $table->id('cek_id'); // cek_id sebagai primary key
            $table->unsignedBigInteger('user_id'); // kolom foreign key
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // foreign key yang mengarah ke users
            $table->decimal('bp', 8, 2);  // Blood Pressure
            $table->decimal('bgr', 8, 2); // Blood Glucose Rate
            $table->decimal('rc', 8, 2);  // Red Cell Count
            $table->decimal('sg', 8, 2);  // Specific Gravity
            $table->decimal('bu', 8, 2);  // Blood Urea
            $table->enum('htn', ['yes', 'no']);
            $table->enum('al', ['yes', 'no']);
            $table->enum('sc', ['yes', 'no']);
            $table->enum('dm', ['yes', 'no']);
            $table->enum('su', ['yes', 'no']);
            $table->enum('sod', ['yes', 'no']);
            $table->enum('cad', ['yes', 'no']);
            $table->enum('rbc', ['yes', 'no']);
            $table->enum('pot', ['yes', 'no']);
            $table->enum('appet', ['yes', 'no']);
            $table->enum('pc', ['yes', 'no']);
            $table->enum('hemo', ['yes', 'no']);
            $table->enum('pe', ['yes', 'no']);
            $table->enum('pcc', ['yes', 'no']);
            $table->enum('pvc', ['yes', 'no']);
            $table->enum('ane', ['yes', 'no']);
            $table->enum('ba', ['yes', 'no']);
            $table->enum('wc', ['yes', 'no']);
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('cek_ginjal');
    }
}
