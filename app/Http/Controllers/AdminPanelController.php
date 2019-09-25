<?php

namespace App\Http\Controllers;

use App\Album;
use App\Client;
use App\Photo;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
        public function home()
        {
          $clients =Client::all()->count();
          $albums_count = Album::all()->count();
          $public_albums_count =Album::where('type' , 'public')->get()->count();
          $private_albums_count =Album::where('type' , 'privet')->get()->count();
          $photos_count= Photo::all()->count() ;
          $public_albums = Album::where('type' , 'public')->get();
            $public_photos=[];
            $public_photos_count =0;
            if (count($public_albums)>0){
                foreach ($public_albums as $public_album) {
                   array_push($public_photos,$public_album->photos()->get()) ;
//                    dd($public_album->photos()->get()->first() !== null) ;
                    if ($public_album->photos()->get()->first() !== null){
                         $public_photos_count = +count($public_album->photos()->get());
                     }

                }
            }

//          $privet_photos_count  =
            $privet_albums = Album::where('type' , 'privet')->get();
            $privet_photos=[];
            $privet_photos_count =0 ;
            if (count($privet_albums)>0){
                foreach ($privet_albums as $privet_album) {
                    array_push($privet_photos,$privet_album->photos()->get()) ;
                    if ($privet_album->photos()->get()->first() !== null){
                    $privet_photos_count+= $privet_album->photos()->get()->count();
                    }
                }
            }


          return   view('AdminPanel.home',compact('clients','albums_count' , 'public_albums_count' ,'private_albums_count' , 'photos_count' , 'public_photos_count' , 'privet_photos_count'));
        }
}
