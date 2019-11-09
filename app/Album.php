<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable=['nome', 'cantor_id'];
    public $timestamps=false;

    public function cantor()
    {
    	return $this->belongsTo('App\Cantor');
    }

}
