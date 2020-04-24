<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class TemplatesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function index(){
            return view('templates.index');
    }

     public function template_one(){
        $contact = App\Contact::where('user_id', auth()->id())
        ->get();
        $skills = App\Level::where('user_id', auth()->id())
        ->get();
        $projects = App\Project::where('user_id', auth()->id())
        ->get();
        $information = App\Information::where('user_id', auth()->id())
        ->get();
        return view('templates.template_one', compact('contact','skills'));
    }

    public function template_two(){
        $contact = App\Contact::where('user_id', auth()->id())
        ->get();
        return view('templates.template_two', compact('contact'));
    }
    public function template_three(){
        $contact = App\Contact::where('user_id', auth()->id())
        ->get();
        $skills = App\Level::where('user_id', auth()->id())
        ->get();
        $projects = App\Project::where('user_id', auth()->id())
        ->get();
        $information = App\Information::where('user_id', auth()->id())
        ->get();
        return view('templates.template_three', compact('contact','skills'));
    }
}
