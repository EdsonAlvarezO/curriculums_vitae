<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class InformationControler extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
    public function personal(){
        $informations = App\Information::where('user_id', auth()->id())
        ->get();;
        $images =  App\Image::where('user_id', auth()->id())
        ->get();
        return view('personal.index',compact('informations','images'));
    }
    public function update($id){
        $information = App\Information::findOrFail($id);
        return view('personal.update',compact('information'));
    }
    public function destroy($id){
        $information = App\Information::find($id);
        $information->delete();
        return back();
        
    }
    public function create(Request $request){
        $information = new App\Information;
        $information->user_id = auth()->id() ;
        $information->name_user = $request->name_user;
        $information->middle_name = $request->middle_name;
        $information->last_name = $request->last_name;
        $information->birth = $request->birth;
        $information->about_you = $request->about_you;
        $information->position_user = $request->position_user;
        $information->location_user = $request->location_user;
        $information->save();
        return back();
    }
    public function updating(Request $request, $id){
        $informationUpdate = App\Information::findOrFail($id);
        $informationUpdate->name_user = $request->name_user;
        $informationUpdate->middle_name = $request->middle_name;
        $informationUpdate->last_name = $request->last_name;
        $informationUpdate->birth = $request->birth;
        $informationUpdate->about_you = $request->about_you;
        $informationUpdate->position_user = $request->position_user;
        $informationUpdate->location_user = $request->location_user;
        $informationUpdate->save();
        return back();
    }
}
