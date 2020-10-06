<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;


class EmailController extends Controller
{
    public function sendEmail(Request $request){

        $msg = request()->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        Mail::to('skrillex_ja14@hotmail.com')->queue(new SendEmail($msg));

        return 'enviado';
    }
}
