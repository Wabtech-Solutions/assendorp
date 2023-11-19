<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

use App\Rules\ReCaptcha;

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
                $message->from('info@autorijschoolassendorp.nl');
                $message->to('info@autorijschoolassendorp.nl', 'Rob')
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
                'bericht' => 'required',
			'valid' => 'required'

        ]);

		 if (strlen($request->valid) < 6) {
		

        return back()->with('success', 'De captcha is helaas niet goed ingevuld, probeer het opnieuw.' );
			 
		 }
		
		        Mail::send(
            'mail.contact',[
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'msg_subject' => $request->get('msg_subject'),
                'bericht' => $request->get('bericht'),
            ],
            function ($message) use ($request) {
                $message->from('info@autorijschoolassendorp.nl');
                $message->to('info@autorijschoolassendorp.nl', 'Rob')
                    ->subject('Een nieuw bericht voor Autorijschool Assendorp');
            }
        );

        Mail::send(
            'mail.contactUser',[
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'msg_subject' => $request->get('msg_subject'),
                'bericht' => $request->get('bericht'),
            ],
            function ($message) use ($request) {
                $message->from('info@autorijschoolassendorp.nl', 'Autorijschool Assendorp');
                $message->to($request->get('email'), $request->get('name'))
                    ->subject('Autorijschool Assendorp - Bedankt voor je bericht!');
            }
        );

        return back()->with('success', 'Bedankt '.$request->get('name') .', we nemen zo snel mogelijk contact met je op.' );
    }
}
