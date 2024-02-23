<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu';
    protected $fillable = ['jenis_id', 'nama_menu', 'harga', 'image', 'deskripsi'];

    public function jenis(){
        return $this->belongsTo(Jenis::class, 'jenis_id');
    }
}
