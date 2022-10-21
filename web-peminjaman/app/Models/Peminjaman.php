<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'tbpeminjaman';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nama',
        'jumlah',
        'tanggal_peminjaman',
        'tanggal_pengembalian',
        'perihal_peminjaman',
    ];
}
