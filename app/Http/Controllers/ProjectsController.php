<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ProjectsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function projects(){
        $projects =  App\Project::where('user_id', auth()->id())
        ->paginate(6);
        return view('projects.index',compact('projects'));
    }
    public function update($id){
        $project = App\Project::findOrFail($id);
        return view('projects.update',compact('project'));
    }
    public function destroy($id){
        $project = App\Project::find($id);
        $project->delete();
        return back()->with('danger', 'Deleted');
        
    }
    public function create(Request $request){
        $project = new App\Project;
        $project->user_id = auth()->id() ;
        $project->name = $request->name;
        $project->plataform = $request->plataform;
        $project->description = $request->description;
        $project->url = $request->url;
        $project->save();
        return back()->with('status', 'Saved');
    }
    public function updating(Request $request, $id){
        $project = App\Project::findOrFail($id);
        $project->name = $request->name;
        $project->plataform = $request->plataform;
        $project->description = $request->description;
        $project->url = $request->url;
        $project->save();
        return back()->with('status', 'Updated');
    }
}
