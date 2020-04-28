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
        $contributions = App\Contribution::where('user_id', auth()->id())
        ->get();
        $degrees = App\Degree::where('user_id', auth()->id())
        ->get();
        $hobbies = App\Information::where('user_id', auth()->id())
        ->get();
        $image = App\Image::where('user_id', auth()->id())
        ->get();
        $information = App\Information::where('user_id', auth()->id())
        ->get();
        $hobbies = App\Hobbie::where('user_id', auth()->id())
        ->get();
        $companys = App\Company::where('user_id', auth()->id())
        ->get();
        return view('templates.template_one', compact('contact','skills','projects','companys','contributions','degrees','hobbies','image','information'));
    }

    public function template_two(){
        $contact = App\Contact::where('user_id', auth()->id())
        ->get();
        $skills = App\Level::where('user_id', auth()->id())
        ->get();
        $projects = App\Project::where('user_id', auth()->id())
        ->get();
        $contributions = App\Contribution::where('user_id', auth()->id())
        ->get();
        $degrees = App\Degree::where('user_id', auth()->id())
        ->get();
        $hobbies = App\Information::where('user_id', auth()->id())
        ->get();
        $image = App\Image::where('user_id', auth()->id())
        ->get();
        $information = App\Information::where('user_id', auth()->id())
        ->get();
        $hobbies = App\Hobbie::where('user_id', auth()->id())
        ->get();
        $companys = App\Company::where('user_id', auth()->id())
        ->get();
        $images =  App\Image::where('user_id', auth()->id())
        ->get();
        return view('templates.template_two', compact('contact','skills','projects','companys','images','contributions','degrees','hobbies','image','information'));
    }
    public function template_three(){
        $contact = App\Contact::where('user_id', auth()->id())
        ->get();
        $skills = App\Level::where('user_id', auth()->id())
        ->get();
        $projects = App\Project::where('user_id', auth()->id())
        ->get();
        $contributions = App\Contribution::where('user_id', auth()->id())
        ->get();
        $degrees = App\Degree::where('user_id', auth()->id())
        ->get();
        $hobbies = App\Information::where('user_id', auth()->id())
        ->get();
        $image = App\Image::where('user_id', auth()->id())
        ->get();
        $information = App\Information::where('user_id', auth()->id())
        ->get();
        $hobbies = App\Hobbie::where('user_id', auth()->id())
        ->get();
        $companys = App\Company::where('user_id', auth()->id())
        ->get();
        $images =  App\Image::where('user_id', auth()->id())
        ->get();
        return view('templates.template_three', compact('contact','skills','projects','companys','images','contributions','degrees','hobbies','image','information'));
    }
    public function template_four(){
        $contact = App\Contact::where('user_id', auth()->id())
        ->get();
        $skills = App\Level::where('user_id', auth()->id())
        ->get();
        $projects = App\Project::where('user_id', auth()->id())
        ->get();
        $contributions = App\Contribution::where('user_id', auth()->id())
        ->get();
        $degrees = App\Degree::where('user_id', auth()->id())
        ->get();
        $hobbies = App\Information::where('user_id', auth()->id())
        ->get();
        $image = App\Image::where('user_id', auth()->id())
        ->get();
        $information = App\Information::where('user_id', auth()->id())
        ->get();
        $hobbies = App\Hobbie::where('user_id', auth()->id())
        ->get();
        $companys = App\Company::where('user_id', auth()->id())
        ->get();
        $images =  App\Image::where('user_id', auth()->id())
        ->get();
        return view('templates.template_four', compact('contact','skills','projects','companys','images','contributions','degrees','hobbies','image','information'));
    }
    public function template_five(){
        $contact = App\Contact::where('user_id', auth()->id())
        ->get();
        $skills = App\Level::where('user_id', auth()->id())
        ->get();
        $projects = App\Project::where('user_id', auth()->id())
        ->get();
        $contributions = App\Contribution::where('user_id', auth()->id())
        ->get();
        $degrees = App\Degree::where('user_id', auth()->id())
        ->get();
        $hobbies = App\Information::where('user_id', auth()->id())
        ->get();
        $image = App\Image::where('user_id', auth()->id())
        ->get();
        $information = App\Information::where('user_id', auth()->id())
        ->get();
        $hobbies = App\Hobbie::where('user_id', auth()->id())
        ->get();
        $companys = App\Company::where('user_id', auth()->id())
        ->get();
        $images =  App\Image::where('user_id', auth()->id())
        ->get();
        return view('templates.template_five', compact('contact','skills','projects','companys','images','contributions','degrees','hobbies','image','information'));
    }
    public function template_six(){
        $contact = App\Contact::where('user_id', auth()->id())
        ->get();
        $skills = App\Level::where('user_id', auth()->id())
        ->get();
        $projects = App\Project::where('user_id', auth()->id())
        ->get();
        $contributions = App\Contribution::where('user_id', auth()->id())
        ->get();
        $degrees = App\Degree::where('user_id', auth()->id())
        ->get();
        $hobbies = App\Information::where('user_id', auth()->id())
        ->get();
        $image = App\Image::where('user_id', auth()->id())
        ->get();
        $information = App\Information::where('user_id', auth()->id())
        ->get();
        $hobbies = App\Hobbie::where('user_id', auth()->id())
        ->get();
        $companys = App\Company::where('user_id', auth()->id())
        ->get();
        $images =  App\Image::where('user_id', auth()->id())
        ->get();
        return view('templates.template_six', compact('contact','skills','projects','companys','images','contributions','degrees','hobbies','image','information'));
    }
}
