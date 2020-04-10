<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ImagesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $images =  App\Image::where('user_id', auth()->id())
        ->get();;
        return view('image.index',compact('images'));
    }
    public function upload(Request $request){
            $file = $request->file('file');
            $name = auth()->id().$file->getClientOriginalName();
            $file->move(public_path().'/images_user/', $name);
            $img = new App\Image;
            $img->user_id = auth()->id();
            $img->url = $name;
            $img->save();
            return back();
    }
}
