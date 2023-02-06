<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $guarded = [];

    public function dosen()
    {
        return $this->belongsTo('App\Models\Dosen');
    }

    public function wali()
    {
        return $this->belongsTo('App\Models\Wali');
    }
}