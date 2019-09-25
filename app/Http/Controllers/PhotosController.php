<?php

namespace App\Http\Controllers;

use App\Album;
use App\Http\Requests\PhotoValidate;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function create($id)
    {
        $album  = Album::findOrFail($id);
        return view('photos.form', compact('album'));
    }

    public function store($id,PhotoValidate $request)
    {
        $album  = Album::findOrFail($id) ;
        $photo = $album->photos()->create();
        $image = $request->file('photo');
        $name_img = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('images/album_photos/');
        $image->move($destinationPath, $name_img);
        $photo->photo= $name_img;
        $photo->update(['cover' => $name_img]);
        return redirect()->route('album_show' , [$album->id]);
        
    }

    public function delete($id , $photo_id)
    {
        $album = Album::findOrFail($id) ;
        $photo = $album->photos()->findOrFail($photo_id) ;
        if (isset($photo->photo)) {
            $file = $photo->photo;
            $filename = public_path() . '/images/album_photos/' . $file;
            \Illuminate\Support\Facades\File::delete($filename);
        }
        $photo->delete();
        return redirect()->route('album_show' , [$album->id]);
    }
}

