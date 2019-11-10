<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Musica extends Model
{
    protected $fillable=['nome','genero_id', 'albuns_id'];
    public $timestamps=false;

    public function genero()
    {
    	return $this->belongsTo('App\Genero');
    }
    public function album()
    {
    	return $this->belongsTo('App\Album');
    }
}
