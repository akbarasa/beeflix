<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;
use App\Episode;


class MainController extends Controller
{
 	public function index(){
 		$genre = Genre::all();
 		$movie = Movie::all();
 		

        return view('home', ['movie' => $movie, 'genre' => $genre]);
    }  

    public function viewAllFilm(){
 		$genre = Genre::all();
 		$movie = Movie::orderBy('title')->get();
 		

        return view('view', ['movie' => $movie, 'genre' => $genre]);
    }  

    public function viewCategory($id){
 		$movie = Movie::where('genre_id', '=', $id)->get();
 
        return view('view', ['movie' => $movie]);
    }   


    public function viewDetail($id){
    	$episodeData = Episode::where('movies_id', '=', $id)->paginate(3);
    	$movie = Movie::find($id);

    	 return view('details', ['movie' => $movie, 'ep' => $episodeData]);
    }

}
