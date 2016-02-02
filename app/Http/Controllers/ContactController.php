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

        $uri = 'https://mandrillapp.com/api/1.0/messages/send.json';

$postString = '{
"key": "GymXkBwplLiYSOF-YxfyqA",
"message": {
    "html": "this is the emails html content",
    "text": "this is the emails text content",
    "subject": "this is the subject",
    "from_email": "tim@cmrmarine.co.uk",
    "from_name": "John",
    "to": [
        {
            "email": "craiglovelock54@hotmail.co.uk",
            "name": "Bob"
        }
    ],
    "headers": {

    },
    "track_opens": true,
    "track_clicks": true,
    "auto_text": true,
    "url_strip_qs": true,
    "preserve_recipients": true,

    "merge": true,
    "global_merge_vars": [

    ],
    "merge_vars": [

    ],
    "tags": [

    ],
    "google_analytics_domains": [

    ],
    "google_analytics_campaign": "...",
    "metadata": [

    ],
    "recipient_metadata": [

    ],
    "attachments": [

    ]
},
"async": false
}';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $uri);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);

$result = curl_exec($ch);

echo $result;

    }
}
