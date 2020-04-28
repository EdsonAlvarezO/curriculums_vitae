<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\SendMail;
use Illuminate\Mail\Mailable;
use \App\Http\Controllers\Mail;
use App;
class MailSend extends Controller
{
    public function mailsend(Request $request, $template)
    {
        //$to = $request->email;;
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
        $pdf = App::make('dompdf.wrapper');
        $pdf = \PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        if($template == 1){
            $pdf = \PDF::loadView('templates.donwloads.download1', compact('contact','skills','projects','images','companys','contributions','degrees','hobbies','image','information'));
            $pdf->setPaper(array(0, 0, 1300, 5000), 'portrait')->save(public_path().'/background/template.pdf');
        }else if($template == 2){
            $pdf = \PDF::loadView('templates.donwloads.download2', compact('contact','skills','projects','images','companys','contributions','degrees','hobbies','image','information'));
            $pdf->setPaper(array(0, 0, 1300, 5000), 'portrait')->save(public_path().'/background/template.pdf');
        }else if($template == 3){
            $pdf = \PDF::loadView('templates.donwloads.download3', compact('contact','skills','projects','images','companys','contributions','degrees','hobbies','image','information'));
            $pdf->setPaper(array(0, 0, 1300, 5000), 'portrait')->save(public_path().'/background/template.pdf');
        }
        else if($template == 4){
            $pdf = \PDF::loadView('templates.donwloads.download4', compact('contact','skills','projects','images','companys','contributions','degrees','hobbies','image','information'));
            $pdf->setPaper(array(0, 0, 1300, 5000), 'portrait')->save(public_path().'/background/template.pdf');
        }else if($template == 5){
            $pdf = \PDF::loadView('templates.donwloads.download5', compact('contact','skills','projects','images','companys','contributions','degrees','hobbies','image','information'));
            $pdf->setPaper(array(0, 0, 1300, 5000), 'portrait')->save(public_path().'/background/template.pdf');
        }else if($template == 6){
            $pdf = \PDF::loadView('templates.donwloads.download6', compact('contact','skills','projects','images','companys','contributions','degrees','hobbies','image','information'));
            $pdf->setPaper(array(0, 0, 1300, 5000), 'portrait')->save(public_path().'/background/template.pdf');
        }
        //$details = $pdf;

        //\Mail::to($to)->send(new SendMail($details));
        //return back()->with('status', 'Your resume has been successfully mailed');;
        
        $data["email"]=$request->email;
        $data["client_name"]="client_name";
        $data["subject"]="Curriculum Vitae";

        //$pdf = PDF::loadView('mails.mail', $data);

        try{
            \Mail::send('emails.sendmail', $data, function($message)use($data,$pdf) {
            $message->to($data["email"], $data["client_name"])
            ->subject($data["subject"])
            ->attach(public_path().'/background/template.pdf');
            });
        }catch(JWTException $exception){
            $this->serverstatuscode = "0";
            $this->serverstatusdes = $exception->getMessage();
        }

        return back()->with('status', 'Your resume has been successfully mailed');
    }
}
