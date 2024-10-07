<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;


use App\Rules\ReCaptcha;

class MailController extends Controller
{
    public function planRijles(Request $request)
   {
       // Stap 1: Valideer de basisgegevens
       $this->validate($request, [
           'telefoon' => 'required',
           'name' => 'required',
           'date' => 'required',
           'pakket' => 'required',
           'mail' => 'required',
           'time' => 'required',
           'g-recaptcha-response' => 'required',
       ]);

       $formattedDate = Carbon::parse($request->date)->translatedFormat('l j F');


       // Stap 2: Valideer reCAPTCHA
       $recaptcha_response = $request->input('g-recaptcha-response');
       $recaptcha = new \ReCaptcha\ReCaptcha('6Lfi71UqAAAAAMVpI0XnSBTY_LbU00LO9BCjL1fT');
       $resp = $recaptcha->setExpectedHostname($_SERVER['SERVER_NAME'])
                         ->verify($recaptcha_response, $_SERVER['REMOTE_ADDR']);

       if (!$resp->isSuccess()) {
           return back()->withErrors(['captcha' => 'ReCaptcha verificatie mislukt. Probeer het opnieuw.']);
       }

       // Stap 3: Verstuur de email na succesvolle validatie
       Mail::send(
           'mail.analyseMail',
           [
               'name' => $request->get('name'),
               'telefoon' => $request->get('telefoon'),
               'mail' => $request->get('mail'),
               'date' => $request->get('date'),
               'time' => $request->get('time'),
               'pakket' => $request->get('pakket'),
           ],
           function ($message) use ($request) {
               $message->from('info@autorijschoolassendorp.nl');
               $message->to('info@autorijschoolassendorp.nl', 'Rob')
                       ->subject('Een nieuwe aanmelding voor Autorijschool Assendorp');
           }
       );

       return back()->with('success', 'Bedankt ' . $request->get('name') . ', we nemen op ' . $formattedDate . ' contact met je op.');
   }



    public function contact(Request $request)
    {
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('GOOGLE_RECAPTCHA_SECRET'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        $captchaValidation = $response->json();

        if (!$captchaValidation['success']) {
            return back()->withErrors(['captcha' => 'reCAPTCHA-fout. Probeer het opnieuw.'])->withInput();
        }

        $this->validate($request, [

                'name' => 'required',
                'email' => 'required',
                'msg_subject' => 'required',
                'bericht' => 'required',

        ]);

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
