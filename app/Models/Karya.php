<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    /**
     * Relasi ke user (penulis karya)
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}