<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDataTable extends Migration
{
    public function up()
    {
        Schema::create('user_data', function (Blueprint $table) {
            $table->id(); // id kolom
            $table->unsignedBigInteger('user_id'); // kolom foreign key
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // foreign key yang mengarah ke users
            $table->string('golongan_darah');
            $table->text('riwayat_penyakit');
            $table->text('riwayat_obat');
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_data');
    }
}
