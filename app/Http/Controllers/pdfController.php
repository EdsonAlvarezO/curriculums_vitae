<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class pdfController extends Controller
{
    public function downloadpdf($template){
        if($template == 1){
            $pdf = App::make('dompdf.wrapper');
            $contact = App\Contact::where('user_id', auth()->id())
             ->get();
             $skills = App\Level::where('user_id', auth()->id())
            ->get();
            $pdf = \PDF::loadView('templates.download1', compact('contact','skills'));
            return $pdf->setPaper(array(0, 0, 1000, 3000), 'portrait')->stream();
        }else if($template == 2){
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadView('templates.template_two');
            return $pdf->setPaper(array(0, 0, 1000, 2000), 'portrait')->stream('Template.pdf');
        }else if($template == 3){
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadView('templates.template_three');
            return $pdf->setPaper(array(0, 0, 1000, 2000), 'portrait')->stream();
        }
    }
}
