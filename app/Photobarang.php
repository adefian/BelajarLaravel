<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photobarang extends Model
{
    protected $uploads = '/imagesbarang/';

    protected $fillable = ['file'];

    public function getFileAttribute($photo)
    {
    	return $this->uploads . $photo;
    }
}
