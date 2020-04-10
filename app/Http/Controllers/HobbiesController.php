<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class HobbiesController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }
    
        public function hobbies(){
            $hobbies = App\Hobbie::where('user_id', auth()->id())
            ->paginate(5);
            return view('hobbies.index',compact('hobbies'));
        }
        public function update($id){
            $hobbie = App\Hobbie::findOrFail($id);
            return view('hobbies.update',compact('hobbie'));
        }
        public function destroy($id){
            $hobbie = App\Hobbie::find($id);
            $hobbie->delete();
            return back();
            
        }
        public function create(Request $request){
            $hobbie = new App\Hobbie;
            $hobbie->user_id = auth()->id() ;
            $hobbie->name = $request->name;
            $hobbie->url = $request->url;
            $hobbie->save();
            return back();
        }
        public function updating(Request $request, $id){
            $hobbie = App\Hobbie::findOrFail($id);
            $hobbie->name = $request->name;
            $hobbie->url = $request->url;
            $hobbie->save();
            return back();
        }
}
