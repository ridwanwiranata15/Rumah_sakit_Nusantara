<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'nama_lengkap',
        'nomor_telepon',
        'status'
    ];
}
