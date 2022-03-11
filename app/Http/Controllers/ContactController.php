<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactValidation;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

Use Redirect, Response;
Use Session;

class ContactController extends Controller
{
    public function index()
    {
        return view('landing-page.contact-us.index');
    }

    public function tableIndex()
    {

         $contacts = Contact::latest()
                      ->orderby('created_at')
                      ->get();

        return view('landing-page.contact-us.contacts', compact('contacts'));

    
    }

    public function store(ContactValidation $request)
    {
        $validated = $request->validated();

        $contact = Contact::create($validated);

        if($contact->wasRecentlyCreated === true){
            Session::flash('create_message', 'Your message has been sent. Thank you for getting in touch with us!');
        } else {
            Session::flash('create_message_error', 'Message was not sent');
        }


        return back();

        // $post = new Post;

        // $post->name = $request->name;
        // $post->phoneNumber = $request->phoneNumber;
        // $post->email = $request->email;
        // $post->message = $request->message;

        // dd($request->all());

    }

    public function destroy($id)
     {
    
       $delete = Contact::findOrFail($id);
       $delete->delete();

        if($delete){
        
            Session::flash('delete_message', 'Delete successful');
       
        } else {
            Session::flash('delete_message_error', 'Delete unsuccessful');
        }


        return back();
    
    }

   public function show($id)
   {
       $contacts = Contact::findOrFail($id);



       return View::make('contacts.show')->with('contact', $contacts);
   }

}
