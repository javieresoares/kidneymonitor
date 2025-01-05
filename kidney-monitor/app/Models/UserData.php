<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan oleh model
    protected $table = 'user_data';  // Gantilah sesuai dengan nama tabel Anda

    protected $fillable = [
        'user_id',
        'golongan_darah',
        'riwayat_penyakit',
        'riwayat_obat',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
