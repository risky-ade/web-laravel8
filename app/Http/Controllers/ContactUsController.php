<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index() {
        {
            $contact = Contact::query()->first();
            $title = "Contactus";
            $active = "contactus";
            return view('contactus',compact('contact','title','active'));
      
          }
      }

          /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
      public function store(Request $request) {
          $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject'=>'required',
            'message' => 'required'
         ]);
     
         ContactUs::create($request->all());
    
        Mail::send('email', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'form_message' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('adebintang765@gmail.com', 'Hello Admin')->subject($request->get('subject'));
        });
    
        return back()->with('success', 'Terima kasih !, Pesan Anda Sudah Kami Terima ');
      }
}
