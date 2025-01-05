<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // id kolom
            $table->string('username');
            $table->string('nama_lengkap');
            $table->date('tanggal_lahir');
            $table->string('email')->unique();
            $table->string('password_hash');
            $table->enum('role', ['admin', 'user']); // Role user
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
