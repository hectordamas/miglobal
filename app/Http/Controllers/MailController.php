<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function submit(Request $request){
        $data = [
            'request' => $request
        ];

        Mail::send('mail.contacto', $data , function($message) use ($request){
            $message->from('no-reply@miglobal.com', 'MiGlobal');
            $message
            ->to(['miglobal@miglobal.com', 'hectorgabrieldm@hotmail.com'])
            ->subject('Contacto desde miglobal.com: ' . $request->name);
        });


        return redirect()->back()->with('message', 'Mensaje enviado con éxito!');
    }
}
