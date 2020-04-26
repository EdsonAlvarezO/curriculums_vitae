<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class SkillsController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}

    public function skills(){
        $skills = App\Level::where('user_id', auth()->id())
        ->paginate(5);
        return view('skills.index',compact('skills'));
    }
    public function update($id){
        $skill = App\Level::findOrFail($id);
        return view('skills.update',compact('skill'));
    }
    public function destroy($id){
        $skill = App\Level::find($id);
        $skill->delete();
        return back()->with('danger', 'Deleted');
        
    }
    public function create(Request $request){
        $skill = new App\Level;
        $skill->user_id = auth()->id() ;
        $skill->name = $request->name;
        $skill->level = $request->level;
        $skill->save();
        return back()->with('status', 'Saved');
    }
    public function updating(Request $request, $id){
        $skill = App\Level::findOrFail($id);
        $skill->name = $request->name;
        $skill->level = $request->level;
        $skill->save();
        return back()->with('status', 'Updated');
    }
}
