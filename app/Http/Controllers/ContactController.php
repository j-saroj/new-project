<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = Contact::latest()->simplePaginate(15);
        return view('admin.pages.contact.index', ['contact' => $contact]);
    }


    public function show(Contact $contact)
    {
        $contact->update(['viewed' => 1]);
        return view('admin.pages.contact.view', ['contact' => $contact]);
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function destroy(Contact $contact)
    {
        if ($contact->delete()) {
            return redirect(route('inquiry.index'))->withSuccess('The inquiry has been deleted!');
        } else {
            return redirect()->back()->withErrors('The inquiry could not be deleted!');
        }
    }
}
