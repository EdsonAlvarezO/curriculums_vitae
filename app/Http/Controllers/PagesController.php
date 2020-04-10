<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{   
    
    public function start(){
        return view('start');
    }
   
}
