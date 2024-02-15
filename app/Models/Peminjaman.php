<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $guarded = ['id'];//mengatur hanya coloum id

    //relasi antar table
    //relasi dari model kategori buku ke kategori buku relasi
    public function user()
    {
        return $this->belongsTo(user::class);
    }
    //relasi dari model buku ke koleksi prbadi
    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
}
