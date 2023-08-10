<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nik',
        'telpon',
        'negara',
        'provinsi',
        'kota',
        'alamat',
        'umur',
        'tempat',
        'tanggalkeb',
        'jumlah',
        'user_id'
    ];
}
