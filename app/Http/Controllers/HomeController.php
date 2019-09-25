<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  
    
    public function home()
    {
        $albums = Album::where('type' , 'public')->get();
        return view('home', compact('albums')) ;
    }
}
