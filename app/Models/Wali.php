<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    use HasFactory;
    protected $table = 'wali';
    protected $guarded = [];

    public function mahasiswa()
    {
        return $this->hasMany('App\Models\Mahasiswa');
    }
}
