<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmailTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("contact.index");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        // dd($request->all());
        Mail::to($request->input('email'))
        ->bcc('ntduong1998vn@gmail.com')
        ->send(new ContactEmailTemplate($request->all()));


        return redirect()->route('contact.thank');
    }

}
