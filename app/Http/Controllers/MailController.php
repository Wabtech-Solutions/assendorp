<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function planRijles(Request $request)
    {
        $this->validate($request, [

                'telefoon' => 'required',
                'name' => 'required',
                'date' => 'required',
                'pakket' => 'required'

        ]);

        Mail::send(
            'mail.analyseMail',[
                'name' => $request->get('name'),
                'telefoon' => $request->get('telefoon'),
                'date' => $request->get('date'),
                'pakket' => $request->get('pakket'),
            ],
            function ($message) use ($request) {
                $message->from('contact@wabtech-solutions.nl');
                $message->to('contact@wabtech-solutions.nl', 'Willem')
                    ->subject('Een nieuwe aanmelding voor Autorijschool Assendorp');
            }
        );

        return back()->with('success', 'Bedankt '.$request->get('name') .', we nemen op '.$request->get('date') .' contact met je op.' );
    }


    public function contact(Request $request)
    {
        $this->validate($request, [

                'name' => 'required',
                'email' => 'required',
                'msg_subject' => 'required',
                'message' => 'required'

        ]);

        Mail::send(
            'mail.contact',[
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'msg_subject' => $request->get('msg_subject'),
                'bericht' => $request->get('bericht'),
            ],
            function ($message) use ($request) {
                $message->from('contact@wabtech-solutions.nl');
                $message->to('contact@wabtech-solutions.nl', 'Willem')
                    ->subject('Een nieuw bericht voor Autorijschool Assendorp');
            }
        );

        return back()->with('success', 'Bedankt '.$request->get('name') .', we nemen zo snel mogelijk contact met je op.' );
    }
}
