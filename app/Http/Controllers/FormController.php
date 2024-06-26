<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function contact_form(Request $request)
    {

        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|max:100',
            'tel' => 'max:15', 
            'content' => 'required',
        ]);


        Mail::send(
            'mails.contactMail',
            [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'tel' => $request->get('tel'),
                'content' => $request->get('content')
            ],

            
            function ($message) {
                $message->from(env('MAIL_USERNAME'));
                $message->to(env('MAIL_TO'))
                    ->subject('Nowa wiadomość ze strony ');
            }
        );
        $formSubmitted = true;

        return view('pages.contact.index', ['formSubmitted' => $formSubmitted]);
    }
}
