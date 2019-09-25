<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public $fillable =[ 'album_id' ,'photo'] ;
    public $timestamps=true ;

    public function album()
    {
        return $this->belongsTo(Album::class);
    }
    
}
