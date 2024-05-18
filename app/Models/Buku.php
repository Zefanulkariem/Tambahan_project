<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = ['judul_buku','deskripsi','kategori','tanggal_terbit','id_penulis'];
    public $timelaps = true;

    public function penulis()
    {
        return $this->BelongsTo(Penulis::class, 'id_penulis');
    }
}
