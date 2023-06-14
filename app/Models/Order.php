<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'nama',
        'asal',
        'tujuan',
        'tanggal',
        'jam',
        'bus',
        'jumlah_kursi'
    ];

    use HasFactory;
}
