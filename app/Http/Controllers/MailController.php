<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {

        $details = [
            'title' => 'Salom Man Lazizman',
            'body' => 'Bu test shaklida ishlamoqda.'
        ];

        Mail::to("lazizjonweb@gmail.com")->send(new TestMail($details));
        return "Email Sent";
    }
}
