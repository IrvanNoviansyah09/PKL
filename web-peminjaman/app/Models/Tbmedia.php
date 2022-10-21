<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbmedia extends Model
{
    protected $table = 'tbmedia';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nama',
        'jenis',
        'jumlah',
        'status',
    ];
}
