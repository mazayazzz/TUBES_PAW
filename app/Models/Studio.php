<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pemesanan;

class Studio extends Model
{
    protected $table = 'studio';
    protected $primaryKey = 'id_studio';
    public $timestamps = false;

    protected $fillable = [
        'nama_studio',
        'kapasitas'
    ];

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class, 'id_studio');
    }
}
