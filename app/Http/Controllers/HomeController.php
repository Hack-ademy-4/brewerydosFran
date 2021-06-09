<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactReceived;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function home()
    {
        return view ("welcome");
    } 
    
     public function contact()
    {
        return view ("contact");
    } 

    public function newContact(Request $request)
    {
    $requestValidated = $request->validate
    ([

        'name'=>['required', 'max:50', 'min:2'],
        'email'=>['required', 'email:rfc,dns'],
        'message'=>['required', 'min:10', 'max:255'],

    ]) ;   
    Mail::to($requestValidated['email'])->send(new ContactReceived());    
    return redirect()->route("home")->with("message",$request->input("name"));
    }
}

