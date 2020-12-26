<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'transaksis';
    protected $primaryKey = 'id_tr';
    protected $fillable = [
    'id',
    'ign',
    'pass',
    'rank_awal',
    'rank_tujuan',
    'price',
    'notelp',
    ];
}
