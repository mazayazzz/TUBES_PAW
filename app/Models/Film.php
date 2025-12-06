<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;
use App\Models\Jadwal;

class Film extends Model
{
    use HasFactory; 

    protected $table = 'film';
    protected $primaryKey = 'id_film';
    public $timestamps = false;

    protected $fillable = [
        'judul',
        'durasi',
        'genre',
        'rating'
    ];

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class, 'id_film');
    }
}
