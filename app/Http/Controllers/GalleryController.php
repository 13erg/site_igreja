<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    public function index()
    {
        return view('teste.galleryform');
    }

    public function store(Request $request)
    {
        dd($request->only('select'));
        //validate only one record
        /*$val = Validator::make($request->all(), [
            'images' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        if ($val->fails()) {
            return redirect()->back()->with(['message' => 'No file received']);
        } else {
            $request->file('fotos')->store('images', '1');
            echo 'image record on database';
        }*/

        //==================================================================================
        // create a loop to load multiple images 
        /*for($i = 0; $i < count($request->allFiles()['images']); $i++){
            
            $file =  $request->allFiles()['images'][$i];
            
            $file->store('images');
            
        }
        echo 'image has been uploaded with sucess in db';*/
        //===================================================================================

        // it was used a foraech for bring a unique image and store in db
        if ($request->hasFile('images')) {

            $validator = $request->validate([
                'images' => 'required',
                'images.*' => 'image|mimes:png,jpeg,jpg'
            ]);

            if ($validator) {

                foreach ($request->file('images') as $image) {
                    $image->store('images3/stanley');
                }
                echo 'image has been load!';
            } else {
                return redirect()->route('home'); // this else does not work!!!!
            }
        }
    }

    public function showGallery($id)
    {
        echo 'gallery being displayed'.' - '.$id;
        //tenho que alimentar o parte de fotos e trazer o conteúdo para esta página!
    }
}
