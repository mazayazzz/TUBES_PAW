<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pelanggan;
use App\Models\DetailTiket;
use App\Models\Pembayaran;
use App\Models\Jadwal;
use App\Models\Studio;

class Pemesanan extends Model
{
    protected $table = 'pemesanan';
    protected $primaryKey = 'id_pemesanan';
    public $timestamps = false;

    protected $fillable = [
        'id_pelanggan',
        'id_jadwal',
        'id_studio',
        'jumlah_tiket'
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan');
    }

    public function detail()
    {
        return $this->hasMany(DetailTiket::class, 'id_pemesanan');
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'id_pemesanan');
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'id_jadwal');
    }

    public function studio()
    {
        return $this->belongsTo(Studio::class, 'id_studio');
    }
}
