<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Fakultas extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($fakultas){
            if(empty($fakultas->api_token)){
                $fakultas->api_token = Str::random(10);
            }
        });
    }

    protected $table ='fakultas';
    protected $fillable = [
        'nama',
        'api_token',
    ];

    public function prodi(){
        return $this->hasMany(Prodi::class);
    }
}
