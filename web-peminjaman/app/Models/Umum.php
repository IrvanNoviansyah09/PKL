<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umum extends Model
{
    use HasFactory;
    protected $table = "penumum";
    // protected $guarded = [];
    protected $primaryKey = 'id';
    protected $fillable = ['id',
    'nama',
    'nim',
    'fakultas',
    'prodi',
    'nama_barang',
    'jenis_barang',
    'jumlah_barang',
    'tanggal_peminjaman',
    'tanggal_pengembalian',
    'perihal_peminjaman'];

}
