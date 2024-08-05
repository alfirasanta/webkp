<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $fillable = ['id_kategori', 'nama_layanan', 'detail', 'gambar', 'harga'];

    public function category()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
