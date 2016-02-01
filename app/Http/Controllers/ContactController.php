<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function send(Request $request)
    {
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

            <br />
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
            echo "sent";
        }
    }
}
