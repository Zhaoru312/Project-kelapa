<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'deskripsi',
        'kode',
        'kuantitas',
        'harga',
    ];
    public function gambar_produk()
    {
        return $this->hasMany(gambar_produk::class);
    }
}
