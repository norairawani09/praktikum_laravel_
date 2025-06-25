<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    public function nilais() {
    return $this->hasMany(Nilai::class);
}
}
