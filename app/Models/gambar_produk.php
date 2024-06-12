<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gambar_produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'gambar',
        'kode',
        'produk_id',
    ];
    public function product()
    {
        return $this->belongsTo(Produk::class);
    }
}
