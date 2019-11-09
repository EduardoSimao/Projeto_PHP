<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Musica extends Model
{
    protected $fillable=['nome','genero_id', 'cantor_id', 'album_id'];
    public $timestamps=false;

    public function cantor()
    {
    	return $this->belongsTo('App\Cantor');
    }

    public function genero()
    {
    	return $this->belongsTo('App\Genero');
    }
    public function album()
    {
    	return $this->belongsTo('App\Album');
    }
}
