<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
   public $fillable = ['name' , 'type' , 'rate' , 'client_id'  ,'cover']  ;
    public $timestamps = true ;

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class) ;
    }
}
