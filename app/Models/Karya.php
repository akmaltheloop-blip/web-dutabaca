<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karya extends Model
{
    protected $table = 'karyas';

    protected $fillable = [
        'user_id',
        'judul',
        'kategori',
        'deskripsi',
        'file',
        'status',
        'catatan_review'
    ];
}