<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {
// //        if ($request->ajax()) {
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;
        Mail::to('ayman@greengold-egy.com')
            ->send(new ContactMail(['name' => $name, 'email' => $email, 'message' => $message]));
        return redirect()->back();
//            return response(['status' => true, 'msg' => 'Your message Send successfully']);
//        }


    }
}
