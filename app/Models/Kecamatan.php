<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    public function kota()
    {
        return $this->belongsTo(Kota::class);
    }

    public function kelurahans()
    {
        return $this->hasMany(Kelurahan::class);
    }
}