<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ContactForm; 
use App\Models\InquiryForm; 
// use Mail; 
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\InquiryMail;
use App\Mail\ContactReply;
use App\Mail\InquiryReply;

class ContactFormsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $contact = new ContactForm;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->phone_number = $request->phone;
        $contact->message = $request->message;
        $contact->save();

        $data = array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'phone' => $request->get('phone'),
            'message' => $request->get('message'),
        );

        
        Mail::to('bochieng@kenlinksolutions.com')->send(new ContactMail($data));

        Mail::to($data['email'])->send(new ContactReply($data));
        // Mail::send('pages.contact-email', $data, function ($message) use ($data) {
        //     $message->from($data['email']);
        //     $message->to('bochieng@kenlinksolutions.com')->subject($data['subject']);
        // });
        
        // Mail::send('pages.inquiry-email', $data, function ($message) use ($data) {
        //     $message->from('bochieng@kenlinksolutions.com');
        //     $message->to($data['email'])->subject('Thank you for the interest');
        // });
        return back()->with('success', 'Thank you for contacting us!');
    }


    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveInquiry(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $inquiry = new InquiryForm();

        $inquiry->name = $request->name;
        $inquiry->email = $request->email;
        $inquiry->phone_number = $request->phone;
        $inquiry->message = $request->message;
        $inquiry->save();
        // dd($inquiry);
        $data = array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'message' => $request->get('message'),
        );

        Mail::to('bochieng@kenlinksolutions.com')->send(new InquiryMail($data));

        Mail::to($data['email'])->send(new InquiryReply($data));

        return back()->with('success', 'Thank you for your inquiry!');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
