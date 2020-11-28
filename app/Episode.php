<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    //
    protected $fillable = [
        'movies_id','episode','title',
        ];

        protected $table = 'episodes';

    public function movie(){
        return $this->hasOne('App\Movie', 'id', 'movies_id');
    }

}
