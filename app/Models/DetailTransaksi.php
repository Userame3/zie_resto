<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;

    protected $table = 'detail_transaksi';
    protected $fillable = ['id_transaksi','id_menu','jumlah','subtotal'];

    public function menu(){
        return $this->belongsTo(Menu::class, 'id_menu');
    }
}
