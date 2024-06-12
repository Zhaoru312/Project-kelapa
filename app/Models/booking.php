<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'produk_id',
        'kuantitas',
        'total_harga',
        'alamat',
        'email',
        'status',   
    ];
    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}

