<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{

    protected $table = "artist";
    protected $primaryKey = "ArtistId";
    public $timestamps = false;

    //ESTABLECER RELACION 1 ARTISTA -M DISCOS

    public function discos(){
        //has many
        //1. modelo relacional por eso es app disco
        //FK del artista(papa) en los discos hijos(hijo)
        return $this->hasMany('App\Disco','ArtistId');
    }

    //establecer una relacion entre uno a muchos entre artista y cancion
//Parametro 1:modelo destino tercer modelo
//Parametro 2:Modelo intermedio segundo-modelo
//Parametro 3:FK del modelo 1, en el modelo 2
//parametro 4: FK DEL MODELO 2 en el modelo 3
//parametro 5: PF del modelo 1
//Parametro 6: Pk del modelo 2
    public function canciones(){
return $this->hasManyThrough('App\Cancion','App\Disco','ArtistId','AlbumId','ArtistId','AlbumId');
    }
}
