<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mail\ContactEmail;


class ContactController extends Controller
{
    public function create(){
        return view('inc.contact');
    }

    public function store(Request $request){

        $contact = [];

        $contact['email'] = $request->get('name');
        $contact['name'] = $request->get('email');
        $contact['subject'] = $request->get('subject');
        $contact['message'] = $request->get('message');

        //message delivery logic
        Mail::to('infosynergypainting@gmail.com')->send(new ContactEmail($contact));

        flash('Your message has been sent, You should hear from us soonest!')-> success();

        return redirect()->to('/');

    }
}
