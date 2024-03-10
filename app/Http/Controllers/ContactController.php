<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.contact.index',[
            'contacts'=>Contact::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'phone'      => 'required|numeric|min:11',
            'telephone'  => 'required|numeric|min:11',
            'email'      => 'required|email',
            'address'    => 'required',
            'map'        => 'required',
        ], [
            'phone.min'      => 'Please enter a maximum of 11 digits for the phone number.',
            'telephone.min'  => 'Please enter a maximum of 11 digits for the telephone number.',
        ]);

        $contact=new Contact();
        $contact->phone = $request->phone;
        $contact->telephone = $request->telephone;
        $contact->email = $request->email;
        $contact->address = $request->address;
        $contact->map = $request->map;
        $contact->save();
        Session::flash('success','Contact info add successfully');
        return redirect()->route('contacts.index');
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
        return view('admin.contact.edit',[
            'contact'=>Contact::find($id),
        ]); 
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
        $request->validate([
            'phone'      => 'required|numeric|min:11',
            'telephone'  => 'required|numeric|min:11',
            'email'      => 'required|email',
            'address'    => 'required',
            'map'        => 'required',
        ], [
            'phone.min'      => 'Please enter a maximum of 11 digits for the phone number.',
            'telephone.min'  => 'Please enter a maximum of 11 digits for the telephone number.',
        ]);

        $contact=Contact::find($id);
        $contact->phone = $request->phone;
        $contact->telephone = $request->telephone;
        $contact->email = $request->email;
        $contact->address = $request->address;
        $contact->map = $request->map;
        $contact->save();
        Session::flash('success','Contact info updated successfully');
        return redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::find($id)->delete();
        Session::flash('success','Contact info delete successfully');
        return back();

    }
}