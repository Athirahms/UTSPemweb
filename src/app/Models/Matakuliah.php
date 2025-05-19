<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;
    protected $table ='matakuliah';
    protected $fillable = [
        'kode_mk',
        'nama_mk',
        'sks',
        'prodi_id',
        'dosen_id',
    ];

    public function prodi(){
        return $this->belongsTo(Prodi::class);
    }
    public function dosen(){
        return $this->belongsTo(Dosen::class);
    }
}
