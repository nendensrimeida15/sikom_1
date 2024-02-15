<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $guarded = ['id'];//mengatur hanya coloum id

// relasi di model buku

public function ulasanbuku()//relasi ulasan buku
{
    return $this->hasMany(UlasanBuku::class);
}
//relasi dari model buku ke koleksi pribadi
public function koleksipribadi()
 {
    return $this->hasMany(KoleksiPribadi::class);
}
//relasi dari model buku ke kategori buku relasi
public function kategoribuku_relasi()
{
    return $this->hasMany(KategoriBuku_Relasi::class);
}
//relasi dari model buku ke peminjaman
public function peminjaman()
{
    return $this->hasMany(peminjaman::class);
}
}
