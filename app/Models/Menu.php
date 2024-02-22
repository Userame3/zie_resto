<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu';
    protected $fillable = ['id_jenis', 'nama_menu', 'harga', 'image', 'deskripsi'];

    public function jenis(){
        return $this->belongsTo(Jenis::class, 'id_jenis');
    }
}
