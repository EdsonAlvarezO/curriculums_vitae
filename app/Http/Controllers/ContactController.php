<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ContactController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}

    public function contact(){
        $contact = App\Contact::where('user_id', auth()->id())
        ->get();;
        return view('contact.index',compact('contact'));
    }
    public function update($id){
        $contact = App\Contact::findOrFail($id);
        return view('contact.update',compact('contact'));
    }
    public function destroy($id){
        $contact = App\Contact::find($id);
        $contact->delete();
        return back();
        
    }
    public function create(Request $request){
        $contact = new App\Contact;
        $contact->user_id = auth()->id() ;
        $contact->email = $request->email;
        $contact->telephone = $request->telephone;
        $contact->street = $request->street;
        $contact->city = $request->city;
        $contact->website = $request->website;
        $contact->github = $request->github;
        $contact->save();
        return back();
    }
    public function updating(Request $request, $id){
        $contact = App\Contact::findOrFail($id);
        $contact->email = $request->email;
        $contact->telephone = $request->telephone;
        $contact->street = $request->street;
        $contact->city = $request->city;
        $contact->website = $request->website;
        $contact->github = $request->github;
        $contact->save();
        return back();
    }
}
