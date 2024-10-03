<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Http;


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
            'recaptcha_token' => 'required',
        ]);

        // Stap 2: Valideer de reCAPTCHA-token
        $recaptchaToken = $request->input('recaptcha_token');
        $secretKey = env('RECAPTCHA_SECRET_KEY');

        // Maak de API-aanroep naar Google reCAPTCHA
        $recaptchaResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$recaptchaToken");
        $recaptchaData = json_decode($recaptchaResponse);

        if (!$recaptchaData->success || $recaptchaData->score < 0.5) {
            return back()->withErrors(['recaptcha' => 'ReCAPTCHA validatie mislukt.']);
        }

        // Stap 3: Verstuur de email na succesvolle validatie
        Mail::send(
            'mail.analyseMail', [
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

        return back()->with('success', 'Bedankt ' . $request->get('name') . ', we nemen op ' . $request->get('date') . ' contact met je op.');
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
