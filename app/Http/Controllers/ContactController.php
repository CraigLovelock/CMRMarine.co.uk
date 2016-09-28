<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{

    public function send(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'number' => 'required',
            'message' => 'required',
        ]);

        Mail::send('emails.contact', ['request' => $request], function ($m) use ($request) {
           $m->from('noreply@cmrmarine.co.uk', 'CMRMarine.co.uk');

           $m->to('tim@cmrmarine.co.uk', "Tim")->subject('New Website Enquiry');
        });

    }
}
