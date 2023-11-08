<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rak;
use App\Models\Peminjaman;
use App\Models\Anggota;
use App\Models\Petugas;

class Buku extends Model
{
    use HasFactory;

    protected $table = "buku";
    protected $fillable = [
        'kode_buku',
        'judul_buku',
        'penulis_buku',
        'penerbit_buku',
        'tahun_terbit',
        'stok',
        'id_rak',
    ];

    public function rak()
    {
        return $this->hasMany(Rak::class, 'id', 'id_rak');
    }

    public function peminjaman() {
        return $this->hasMany(Peminjaman::class);
    }

    public function anggota() {
        return $this->belongsToMany(Anggota::class, 'peminjaman');
    }
    
    public function petugas() {
        return $this->belongsToMany(Petugas::class, 'peminjaman');
    }
}