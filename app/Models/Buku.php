<?php

namespace App\Models;

use App\Models\Penerbits;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'penulis',
        'thn_terbit',
        'kategori_id',
        'penerbit_id'
    ];
    public function kategori()
    {
        return $this->belongsTo(Kategoris::class, 'kategori_id', 'id');
    }

    public function penerbit()
    {
        return $this->belongsTo(Penerbits::class, 'penerbit_id', 'id');
    }
}
