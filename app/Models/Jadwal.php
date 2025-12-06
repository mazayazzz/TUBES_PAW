<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Film;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = 'jadwal';
    protected $primaryKey = 'id_jadwal';
    public $timestamps = false;

    protected $fillable = [
        'id_film',
        'waktu_pemutaran'
    ];

    public function film()
    {
        return $this->belongsTo(Film::class, 'id_film');
    }
}
