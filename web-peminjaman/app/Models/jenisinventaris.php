<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenisinventaris extends Model
{
    protected $table = 'tbjenisinventaris';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'tbumum',
        'tbmedia',
        'tbolahraga',
        'tbpanahan',
    ];
}
