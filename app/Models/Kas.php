<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kas extends Model
{
    use HasFactory;

    protected $table = 'uangkas';

    protected $fillable = [
        'tanggal',
        'jenis_transaksi',
        'jumlah',
        'keterangan',
    ];
}