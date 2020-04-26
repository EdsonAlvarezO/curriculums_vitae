<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class DegreesController extends Controller
{
        public function __construct()
        {
            $this->middleware('auth');
        }
    
        public function degrees(){
            $degrees = App\Degree::where('user_id', auth()->id())
            ->paginate(5);
            return view('degrees.index',compact('degrees'));
        }
        public function update($id){
            $degrees = App\Degree::findOrFail($id);
            return view('degrees.update',compact('degrees'));
        }
        public function destroy($id){
            $degrees = App\Degree::find($id);
            $degrees->delete();
            return back()->with('danger', 'Deleted');
            
        }
        public function create(Request $request){
            $degree = new App\Degree;
            $degree->user_id = auth()->id() ;
            $degree->name = $request->name;
            $degree->description = $request->description;
            $degree->time_start = $request->time_start;
            $degree->time_final =  $request->time_final;
            $degree->website = $request->website;
            $degree->save();
            return back()->with('status', 'Saved');
        }
        public function updating(Request $request, $id){
            $degree = App\Degree::findOrFail($id);
            $degree->name = $request->name;
            $degree->description = $request->description;
            $degree->time_start = $request->time_start;
            $degree->time_final =  $request->time_final;
            $degree->website = $request->website;
            $degree->save();
            return back()->with('status', 'Updated');
        }
}
