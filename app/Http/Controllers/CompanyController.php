<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class CompanyController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}

    public function companys(){
        $companys = App\Company::where('user_id', auth()->id())
        ->paginate(5);
        return view('companys.index',compact('companys'));
    }
    public function update($id){
        $company = App\Company::findOrFail($id);
        return view('companys.update',compact('company'));
    }
    public function destroy($id){
        $company = App\Company::find($id);
        $company->delete();
        return back()->with('danger', 'Deleted');
        
    }
    public function create(Request $request){
        $company = new App\Company;
        $company->user_id = auth()->id() ;
        $company->name = $request->name;
        $company->position = $request->position;
        $company->time_start = $request->time_start;
        $company->time_final = $request->time_final;
        $company->description = $request->description;
        $company->website = $request->website;
        $company->save();
        return back()->with('status', 'Saved');
    }
    public function updating(Request $request, $id){
        $company = new App\Company;
        $company->user_id = auth()->id() ;
        $company->name = $request->name;
        $company->position = $request->position;
        $company->time_start = $request->time_start;
        $company->time_final = $request->time_final;
        $company->description = $request->description;
        $company->website = $request->website;
        $company->save();
        return back()->with('status', 'Updated');
    }
}
