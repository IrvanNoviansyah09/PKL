<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbpanahan extends Model
{
    protected $table = 'tbpanahan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nama',
        'jenis',
        'jumlah',
        'status',
    ];
}
