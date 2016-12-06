<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactoController extends Controller
{
    public function form (){

      return view('contactform.contact');

    }

    public function store(Request $request)

    {

     Contact::create([
          'name_contact' => $request['name_contact'],
          'email' => $request['email'],
          'subject_contact' => $request['subject_contact'],
          'contact_text' => $request['contact_text'],
      ]);
      return view('contactform.contact', compact('contacts'));
    }
}
