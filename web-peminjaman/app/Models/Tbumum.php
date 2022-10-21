<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbumum extends Model
{
    protected $table = 'tbumum';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nama',
        'jenis',
        'jumlah',
        'status',
    ];
}
