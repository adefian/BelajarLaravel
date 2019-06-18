<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['nama', 'type','harga','jumlah','photo_id'];

    public function photo()
    {
        return $this->belongsTo('App\Photobarang');
    }
}
