<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use Response;
use Mandrill;
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

        $htmlString = "
            <html>
            <head>
              <title>Website Enquiry From: $request->name</title>
            </head>
            <body>
                <p>From: $request->name</p>
                <p>Contact E-mail: $request->email</p>
                <p>Contact Number: $request->number</p>
                <p>Message:</p>
                <p>$request->message</p>
                <br />
                <hr/>
                <br />
                <p>
                    <strong>
                        Do not reply to this message directly, instead,
                        <a href='mailto:$request->email'>click here to reply to: $request->email</a>
                    </strong>
                </p>
            </body>
            </html>
        ";

        try {
            $mandrill = new Mandrill('GymXkBwplLiYSOF-YxfyqA');
            $message = array(
                'html' => $htmlString,
                'subject' => "New Website Enquiry",
                'from_email' => "noreply@cmrmarine.co.uk",
                'from_name' => "CMRMarine.co.uk",
                'to' => array(
                    array(
                        'email' => "tim@cmrmarine.co.uk",
                        'name' =>  "Tim",
                        'type' => 'to'
                    )
                )
            );
            $result = $mandrill->messages->send($message);
            print_r($result);
        } catch(Mandrill_Error $e) {
            echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
            throw $e;
        }

    }
}
