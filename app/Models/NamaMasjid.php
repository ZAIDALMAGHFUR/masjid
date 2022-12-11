<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NamaMasjid extends Model
{
    use HasFactory;

    protected $table = 'masjids';

    protected $fillable = [
        'nama_masjid',
        'alamat_masjid',
        'no_telp',
    ];
}