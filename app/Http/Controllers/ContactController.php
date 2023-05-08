<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Flash;
use Mail;


class ContactController extends Controller
{
    /**
     * Show the contact page.
     *
     * @return Response
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Process contact form.
     */
    public function store(Request $request)
    {
        // Validate the input fields
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10|numeric',
            'subject' => 'required',
            'contact_message' => 'required',
        ]);

        $input = $request->all();

        // Add record to database
        Contact::create($input);

        // Send email to Admin
        \Mail::send(
            'emails.contact',
            array(
                'name' => $input['name'],
                'email' => $input['email'],
                'phone' => $input['phone'],
                'subject' => $input['subject'],
                'contact_message' => $input['contact_message']
            ),
            function ($message) use ($request) {
                $message->from($request->email);
                $message->to('paul@cynosurenetworx.com', 'Paul Willridge')->subject('Cynosure Networx Contact');
            }
        );

        \Mail::send(
            'emails.contact_reply',
            array(
                'name' => $input['name'],
                'email' => $input['email'],
                'phone' => $input['phone'],
                'subject' => $input['subject'],
                'contact_message' => $input['contact_message']
            ),
            function ($message) use ($request) {
                $message->from('hello@cynosurenetworx.com');
                $message->to($request->email,  $request->name)->subject('Cynosure Networx Contact');
            }
        );

        Flash::message('Thanks for contacting us!')->success();
        return redirect('contact');
    }
}
