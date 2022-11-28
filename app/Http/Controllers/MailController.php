<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyTestMail;
use GuzzleHttp\RetryMiddleware;
use PharIo\Manifest\Email;

class MailController extends Controller


{
    //

    public function send(Request $request)
    {
        //validate form
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'noHp' => 'required',
            'date' => 'required',
            'message' => 'required',
        ]);
        if ($this->isOnline()) {
            $mail_data = [
                'recipient' => 'ahmaddjanuardi@gmail.com',
                'fromEmail' => $request->email,
                'fromName' => $request->name,
                'subject' => $request->subject,
                'body' => $request->message
            ];
            // \Mail::send('emails/myTestMail', $mail_data, function ($message) use ($mail_data) {
            //     $message->to($mail_data['recipient'])
            //         ->from($mail_data['fromEmail'], $mail_data['fromName'])
            //         ->subject($mail_data['subject']);
            // });


            Mail::send('emails/myTestMail', $mail_data, function ($m) use ($mail_data) {
                $m->to($mail_data['recipient'])
                    ->from($mail_data['fromEmail'], $mail_data['fromName'])
                    ->subject($mail_data['subject']);
            });
            return redirect()->back()->with('succes', 'Email Sent!');
        } else {
            return redirect()->back()->withInput()->with('error', 'Check your internet connection');
        }
    }

    public function isOnline($site = "https://youtube.co/")
    {
        if (@fopen($site, "r")) {
            return true;
        } else {
            return false;
        }
    }
}
