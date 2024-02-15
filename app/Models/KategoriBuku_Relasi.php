<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBuku_Relasi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];//mengatur hanya coloum id

    //relasi dari model buku ke kategori buku relasi
    public function buku()
    {
        return $this->belongsTo(Buku::class);
    } 
    //relasi dari model kategori buku ke kategori buku relasi
    public function kategoribuku()
    {
        return $this->belongsTo(KategoriBuku::class);
    }
}
