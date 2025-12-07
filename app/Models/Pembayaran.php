<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran'; // <-- pastikan ini sesuai nama tabel di database

    protected $fillable = [
        'id_pemesanan',
        'total_harga',
        'metode_pembayaran',
        'tanggal_pembayaran',
    ];

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'id_pemesanan', 'id_pemesanan');
    }
}
