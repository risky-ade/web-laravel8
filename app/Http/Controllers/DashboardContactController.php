<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::first();
        return view('dashboard.contact.contact', [
            'contact'=> $contact
        ]);

        // return view('footers', [
        //     'contact'=> $contact
        // ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {

        
        // return view('dashboard.contact.edit', compact('contact'));

        // return view('dashboard.contact.contact', [
        //     'contact'=> $contact
        // ]);

        // return redirect('/dashboard/contact')->with('success', 'Post has been updated!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact= Contact::find($id);
        
        $request -> validate([
            'name'=>'required|max:255',   
            'alamat'=>'required|max:255',
            'telepon'=>'required|max:255',
            'nomorhp'=>'required|max:255',
            'email'=>'required|max:255'
        ]);
        $input = $request->all();

        $contact->update($input);

        return redirect('/dashboard/contact')->with('success', 'data berhasil diupdate!');
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
