<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'penggunas';
    protected $primaryKey = 'id';
    protected $fillable = [
    'username',
    'email',
    'password',
    'remember_token',
    ];
}
