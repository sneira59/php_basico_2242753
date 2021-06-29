<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    protected $table = "artist";
    protected $primaryKey = "ArtistId";
    public $timestamps = false;

    //ESTABLECER ARTISTA - MUCHOS DISCOS
    public function discos(){
        //hasmany:
        //1.modelo a relacionar
        //2.fk del artista(papa) en los albunes (hijo)
        return $this->hasMany('App\Disco', 'ArtistId');

    }
    //ESTABLECER RELACION ENTRE UNO A MUCHOS ENTRE ARTISTA Y CANCION
    public function canciones(){
        return $this->hasManyThrough('App\Cancion',
                                     'App\Disco',
                                        'ArtistId',
                                        'AlbumId',
                                        'ArtistId',
                                        'AlbumId');

    }
}
