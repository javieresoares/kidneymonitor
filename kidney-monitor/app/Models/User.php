<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Menggunakan kolom user_id sebagai primary key
    protected $primaryKey = 'id';

    // Kolom yang dapat diisi
    protected $fillable = [
        'username',
        'nama_lengkap',
        'tanggal_lahir',
        'email',
        'password',
        'role'
    ];

    // Kolom yang perlu disembunyikan
    protected $hidden = [
        'password', // Pastikan ini disembunyikan untuk keamanan
    ];

    // Relasi dengan UserData
    public function userData()
    {
        return $this->hasOne(UserData::class, 'user_id');
    }

    // Relasi dengan CekGinjal
    public function cekGinjal()
    {
        return $this->hasMany(CekGinjal::class, 'user_id');
    }

    // Mutator untuk password agar selalu di-hash saat disimpan
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    // Akses password hash jika diperlukan
    public function getPasswordAttribute()
    {
        return $this->attributes['password'];
    }
}
