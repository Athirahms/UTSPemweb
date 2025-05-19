<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table ='dosen';
    protected $fillable = [
        'nama_dosen',
        'prodi_id',
        'dosen_id',
    ];

    public function prodi(){
        return $this->belongsTo(Prodi::class);
    }
    public function matakuliahs(){
        return $this->hasMany(Matakuliah::class);
    }
}
