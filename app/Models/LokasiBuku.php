<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LokasiBuku extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_buku',
        'no_rak',
        'section'
    ];
}
