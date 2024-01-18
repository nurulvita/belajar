<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    use HasFactory;
    protected $fillable= [
        'nama_peminjam',
        'judul_buku',
        'tanggal_pinjam',
        'tanggal_kembali'
    ];
}
