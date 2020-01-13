<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class PagesController extends Controller
{
    public function getWelcome()
    {
        return view('pages.welcome');
    }

    public function getContact()
    {
        return view('pages.contact');
    }

    public function getAbout()
    {
        return view('pages.about');
    }

    public function getQuery()
    {
        return view('pages.query');
    }

    public function getBusiness()
    {
        return view('pages.business');
    }

    public function getAdvertise()
    {
        return view('pages.advertise');
    }

    public function getRating()
    {
        return view('pages.rating');
    }

    public function storeContact(Request $request)
    {
        $contactData = $request->validate([
            'name' => 'required|max:60',
            'address' => 'required',
            'subject' => 'required',
            'body' => 'required',
        ]);

        $contact = Contact::create($contactData);
        if($contact)
        {
            return redirect('/');
        }
        else
        {
            return redirect()->back()->withErrors('Incorrect current password.');
        }
    }

    public function readContacts()
    {
        $contacts = Contact::paginate(5);
        return view('pages.contactslist',compact('contacts'));
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('pages.edit',compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contactData = $request->validate([
            'name' => 'required|max:60',
            'address' => 'required',
            'subject' => 'required',
            'body' => 'required',
        ]);
        
        $contact = Contact::where('id',$id)->update($contactData);
        if($contact)
        {
            return redirect('/contactslist');
        }
        else
        {
            return "Error";
        }
    }

    public function delete($id)
    {
        $contact = Contact::find($id)->delete();
        return redirect('/contactslist');
    }
}
