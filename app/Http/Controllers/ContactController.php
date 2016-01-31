<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function send()
    {
        $to      = 'craiglovelock54@hotmail.co.uk';
        $subject = 'the subject';
        $message = 'hello';
        $headers = 'From: noreply@cmrmarine.co.uk' . "\r\n" .
            'Reply-To: noreply@cmrmarine.co.uk' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
    }
}
