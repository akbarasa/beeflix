<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $fillable = [
        'title','photo','description', 'rating','genre_id'
    ];

    protected $table = 'movies';

    public function genre(){
        return $this->hasOne('App\Genre', 'id', 'genre_id');
    }

    public function episode(){
        return $this->belongsTo('App\Episode', 'movies_id', 'id');
    }

}
