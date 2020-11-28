<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //
    protected $fillable = [
        'name'
    ];

    protected $table = 'genres';

    public function movie(){
        return $this->belongsTo('App\Movie', 'genre_id', 'id');
    }
}
