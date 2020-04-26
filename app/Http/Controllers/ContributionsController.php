<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ContributionsController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}

    public function contributions(){
        $contributions = App\Contribution::where('user_id', auth()->id())
        ->paginate(5);
        return view('contributions.index',compact('contributions'));
    }
    public function update($id){
        $contribution = App\Contribution::findOrFail($id);
        return view('contributions.update',compact('contribution'));
    }
    public function destroy($id){
        $contribution = App\Contribution::find($id);
        $contribution->delete();
        return back()->with('danger', 'Deleted');
        
    }
    public function create(Request $request){
        $contribution = new App\Contribution;
        $contribution->user_id = auth()->id() ;
        $contribution->name = $request->name;
        $contribution->description = $request->description;
        $contribution->url = $request->url;
        $contribution->save();
        return back()->with('status', 'Saved');
    }
    public function updating(Request $request, $id){
        $contribution = App\Contribution::findOrFail($id);
        $contribution->name = $request->name;
        $contribution->description = $request->description;
        $contribution->url = $request->url;
        $contribution->save();
        return back()->with('status', 'Updated');
    }
}
