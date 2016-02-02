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

        /*$this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'message' => 'required',
        ]);

        $number = ($request->number ? $request->number : "Not given");

        $to  = 'craiglovelock54@hotmail.co.uk';

        $subject = 'Website Enquiry From:' . $request->name;

        $message = "
        <html>
        <head>
          <title>Website Enquiry From: $request->name</title>
        </head>
        <body>
            <p>From: $request->name</p>
            <p>Contact Number: $number</p>
            <p>Message:</p>
            <p>$request->message</p>
        </body>
        </html>
        ";

        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Additional headers
        $headers .= "From: $request->name <$request->email>" . "\r\n";

        // Mail it
        if ( $mail = mail($to, $subject, $message, $headers) ) {
            return Response::json(['success' => true, 'message' => 'Thank you, your message has sent.'], 200);
        } else {
            return Response::json(['success' => false, 'message' => 'There was an error. Please directly email us.'], 200);
        }**/

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'message' => 'required',
        ]);

        $user = [];

        Mail::send('emails.contact', ['user' => $user], function ($m) use ($user) {
            $m->from('tim@cmrmarine.com', 'Your Application')
                ->to('craiglovelock54@hotmail.co.uk', 'craig lovelock')
                ->subject('Your Reminder!');
        });

        if( count(Mail::failures()) > 0 ) {
            return Response::json(['success' => false, 'message' => 'There was an error. Please directly email us.'], 200);
        } else {
            return Response::json(['success' => true, 'message' => 'Thank you, your message has sent.'], 200);
        }

    }
}
