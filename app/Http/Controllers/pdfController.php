<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\pdfEmail;
use App;
class pdfController extends Controller
{
    public function downloadpdf($template){
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
        if($template == 1){
            $pdf = App::make('dompdf.wrapper');
            $pdf = \PDF::loadView('templates.donwloads.download1', compact('contact','skills','projects','companys','contributions','degrees','hobbies','image','information'));
            return $pdf->setPaper(array(0, 0, 1300, 5000), 'portrait')->save(public_path().'/background/template.pdf')->stream();
        }else if($template == 2){
            $pdf = App::make('dompdf.wrapper');
            $pdf = \PDF::loadView('templates.donwloads.download2', compact('contact','skills','projects','images','companys','contributions','degrees','hobbies','image','information'));
            return $pdf->setPaper(array(0, 0, 1000, 5000), 'portrait')->save(public_path().'/background/template.pdf')->stream();
        }else if($template == 3){
            $pdf = App::make('dompdf.wrapper');
            $pdf = \PDF::loadView('templates.donwloads.download3', compact('contact','skills','projects','images','companys','contributions','degrees','hobbies','image','information'));
            return $pdf->setPaper(array(0, 0, 1300, 5000), 'portrait')->save(public_path().'/background/template.pdf')->stream();
        }else if($template == 4){
            $pdf = App::make('dompdf.wrapper');
            $pdf = \PDF::loadView('templates.donwloads.download4', compact('contact','skills','projects','images','companys','contributions','degrees','hobbies','image','information'));
            return $pdf->setPaper(array(0, 0, 1300, 5000), 'portrait')->save(public_path().'/background/template.pdf')->stream();
        }else if($template == 5){
            $pdf = App::make('dompdf.wrapper');
            $pdf = \PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
            $pdf = \PDF::loadView('templates.donwloads.download5', compact('contact','skills','projects','images','companys','contributions','degrees','hobbies','image','information'));
            return $pdf->setPaper(array(0, 0, 1300, 5000), 'portrait')->save(public_path().'/background/template.pdf')->stream();
        }
    }
}
