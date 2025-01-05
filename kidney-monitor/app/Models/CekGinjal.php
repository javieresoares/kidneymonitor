<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CekGinjal extends Model
{
    use HasFactory;

    protected $table = 'cek_ginjal';

    protected $fillable = [
        'user_id',
        'bp',
        'bgr',
        'rc',
        'sg',
        'bu',
        'htn',
        'al',
        'sc',
        'dm',
        'su',
        'sod',
        'cad',
        'rbc',
        'pot',
        'appet',
        'pc',
        'hemo',
        'pe',
        'pcc',
        'pvc',
        'ane',
        'ba',
        'wc'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
