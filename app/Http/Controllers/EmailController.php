<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request){
        $subject = "Asunto del correo";
        $for = "correo_que_recibira_el_mensaje@gmail.com";

        // $subject = $request->subject;
        // $for = $request->email;
        // $name = $request->name;
        Mail::send('mail.email', $request->all(), function($msj) use($subject, $for){
            $msj->from("tucorreo@gmail.com", "Juan");
            $msj->subject($subject);
            $msj->to($for);
        });

        return redirect()->back();
        //return response()->json($request, 200);
    }
}
