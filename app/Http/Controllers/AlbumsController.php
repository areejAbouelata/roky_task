<?php

namespace App\Http\Controllers;

use App\Album;
use App\Client;
use App\Http\Requests\AlbumUpdateValidate;
use App\Http\Requests\AlbumValidate;
use App\Photo;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\File;

class AlbumsController extends Controller
{
   
    public function clientAlbums()
    {
        $client =auth()->guard('clients')->user();
        $albums= auth()->guard('clients')->user()->albums()->get();
        if ($client->id == $albums->first()->client_id){
        return  view('albums.client_albums' , compact('albums' ,'client'))   ;
        }
        return redirect()->route('home');
    }

    public function show($id)
    {
        $album = Album::findOrFail($id) ;
        $photos = $album->photos()->get();
//        prepare view for photos
        return view('albums.album_show',compact('album' , 'photos'));
    }

    public function create()
    {
        return  view('albums.form');
    }

    public function store(AlbumValidate $request)
    {
         $input =  $request->except(['_token' , 'cover']);
         $album = auth()->guard('clients')->user()->albums()->create($input);
// ---------save cover photo
        $image = $request->file('cover');
        $name_img = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('images/album_cover/');
        $image->move($destinationPath, $name_img);
        $album->cover = $name_img;
        $album->update(['cover' => $name_img]);
//            ------------------------------------------------------
         return redirect()->route('albums');
    }

    public function edit($id)
    {
        $album = Album::findOrFail($id) ;
        return  view('albums.form_edit' ,compact('album'));
    }

    public function update(AlbumUpdateValidate $request , $id)
    {
        $album = Album::findOrFail($id) ;
        $input =  $request->except(['_token' , 'cover']);
        $album->update($input);
        if ($request->hasFile('cover')) {
            if (isset($album->cover)) {
                $file = $album->cover;
                $filename = public_path() . '/images/album_cover/' . $file;
                \Illuminate\Support\Facades\File::delete($filename);

            }
            $image = $request->file('cover');
            $name_img = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('images/album_cover/');
            $image->move($destinationPath, $name_img);
            $album->cover = $name_img;
            $album->update(['cover' => $name_img]);
        }
        return redirect()->route('albums');
    }

    public function delete($id)
    {
        $album  = Album::findOrFail($id);
        if (isset($album->cover)) {
            $file = $album->cover;
            $filename = public_path() . '/images/album_cover/' . $file;
            \Illuminate\Support\Facades\File::delete($filename);
        }
        $album->delete();
        if (count($album->photos()->get())>0 && $album->photos()->get()!=''){
                foreach ($album->photos()->get() as $photo){
                    $photo->delete();
                }
        }
        return redirect()->route('albums');
    }
   
}
