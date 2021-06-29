<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayList extends Model
{
    //

    protected $table="Playlist";
    protected $primarykey="PlaylistId";
    public $timestamps=false;

    //RELACION M:m lista de reproduccion->canciones

    public function canciones(){

        //belongsToMany(muchos a muchos con pivote)
//parametros:  1.el modelo relacional
//2.la tabla pivote
//3.FK del modelo actual del pivote
//4.Fk del modelo a relacionar en el pivote

     return $this->belongsToMany('App\Cancion','playlisttrack','PlaylistId','TrackId');
    }
}
