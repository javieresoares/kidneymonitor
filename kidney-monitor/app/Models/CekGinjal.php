<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CekGinjal extends Model
{
    use HasFactory;

    protected $table = 'cek_ginjal';
    protected $primaryKey = 'cek_id';
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'bp',
        'bgr',
        'rc',
        'sg',
        'bu',
        'htn',
        'al',
        'su',
        'sc',
        'sod',
        'pot',
        'rbc',
        'pc',
        'pcc',
        'ba',
        'hemo',
        'pcv',
        'wc',
        'dm',
        'cad',
        'appet',
        'pe',
        'ane',
        'classification',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
