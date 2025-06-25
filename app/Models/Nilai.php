<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    public function mahasiswa() {
    return $this->belongsTo(Mahasiswa::class);
}

public function matakuliah() {
    return $this->belongsTo(Matakuliah::class);
}
}
