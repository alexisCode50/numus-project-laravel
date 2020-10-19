<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;


class EmailController extends Controller
{
    public function sendEmail(Request $request){

        $lang = request()->route()->parameter("lang");
        \App::setLocale($lang);

        $msg = request()->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        if($lang == 'es'){
            Mail::to('info@numusinmobiliaria.com')->queue(new SendEmail($msg));
            \Session::flash('message', 'Mensaje Enviado!');
        } else if($lang == 'en'){
            Mail::to('info@numusinmobiliaria.com')->queue(new SendEmail($msg));
            \Session::flash('message', 'Send Message!');
        }

        return redirect()->back();
    }
}
