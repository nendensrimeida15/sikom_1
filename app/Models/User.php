<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'nama_lengkap',
        'alamat',
        'role',
        'verifikasi',
    ];


    /*------------relasi antar table----------*/
    //relasi dari model user kepeminjaman
    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }
    //relasi dari moedel user ke koleksi pribadi
    public function koleksipribadi()
    {
        return $this->hasMany(Koleksipribadi::class);
    }
    //relasi dari model user ke ulasan pribadi
    public function ulasanbuku()
    {
        return $this->hasMany(UlasanBuku::class);
    }
     
     
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
