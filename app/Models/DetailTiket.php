<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTiket extends Model
{
    use HasFactory;
    protected $table = 'detail_tiket';
    protected $fillable = [
        'id_pemesanan',
        'harga',
        'kategori_tiket'
    ];

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'id_pemesanan');
    }
}
