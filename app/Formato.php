<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formato extends Model
{
    protected $table = "mediatype";
    protected $primaryKey = "MediaTypeId";
    public $timestamps = false;

    public function canciones(){
        return $this->hasMany('App\Cancion','MediaTypeId');
    }
}
