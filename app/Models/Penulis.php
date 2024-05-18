<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    use HasFactory;

    protected $fillable = ['nama_penulis','jenis_kelamin'];
    public $timelaps = true;

    public function buku()
    {
        return $this->hasMany(Buku::class);
    }

    //menghapus image
    public function deleteImage(){
        if($this->cover && file_exists(public_path('image/penulis' . $this->cover))){
            return unlink(public_path('image/penulis' . $this->cover));
        }
    }
}
