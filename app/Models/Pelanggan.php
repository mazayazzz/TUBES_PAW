<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pemesanan;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $primaryKey = 'id_pelanggan';
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'email',
        'nomor_telepon',
    ];

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class, 'id_pelanggan');
    }
}
