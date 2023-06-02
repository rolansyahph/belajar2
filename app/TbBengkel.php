<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TbBengkel extends Model
{
    protected $fillable = [
    	'id', 'no_pesanan','nama_barang', 'jenis_barang', 'harga_barang'
    ];
}
