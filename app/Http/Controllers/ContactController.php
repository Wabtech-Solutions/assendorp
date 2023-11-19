<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\ReCaptcha;

class ContactController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'name' => 'required',
            'email' => 'required',
            'msg_subject' => 'required',
            'bericht' => 'required',
            'valid' => 'required|min:6'

        ]);

		    if (strlen($request->valid) < 6) {
        return back()->with('success', 'FOUT '.$request->get('name') .', we nemen op '.$request->get('date') .' contact met je op.' );
    } else{

		
        $input = $request->all();

        return back()->with('success', 'Bedankt '.$request->get('name') .', we nemen op '.$request->get('date') .' contact met je op.' );
			}
    }
}
