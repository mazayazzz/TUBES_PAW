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
    public $timestamps = true; // kalau ada created_at/updated_at

    protected $fillable = [
        'id_pelanggan',
        'id_jadwal',
        'jumlah_tiket'
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan', 'id_pelanggan');
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'id_jadwal');
    }
}
