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
        ->get();
        return view('image.index',compact('images'));
    }
    public function upload(Request $request){
        if(isset($request->file)){
            $image = App\Image::where('user_id', auth()->id())->get();
            if(sizeof($image) != 0){
                $file = $request->file('file');
                $name = auth()->id().$file->getClientOriginalName();
                $file->move(public_path().'/images_user/', $name);
                $image[0]->user_id = auth()->id();
                $image[0]->url = $name;
                $image[0]->save();
                return back()->with('status', 'Complete!!');
            }else{
                $file = $request->file('file');
                $name = auth()->id().$file->getClientOriginalName();
                $file->move(public_path().'/images_user/', $name);
                $img = new App\Image;
                $img->user_id = auth()->id();
                $img->url = $name;
                $img->save();
                return back()->with('status', 'Complete!!');
            }
        }else{
            return back()->with('danger', 'Select a image please!!');
        }
    }
}
