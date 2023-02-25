<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Exports\ContactExport;
use Maatwebsite\Excel\Facades\Excel;

class contactcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = contact::all();
        return view('contact.contact',['contact' => $contact,"title" => "contact"]);
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
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $input = $request->all();
        contact::create($input);

        return redirect('/home')->with('success', 'Your Message Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show($id, contact $contact)
    {
        $contact = contact::findOrFail($id);
        return view('contact.show', ['contact' => $contact,"title"=>"contact"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, contact $contact)
    {
        $contact = contact::findOrFail($id);
        $contact -> delete();

        return redirect('/dashboard/contact')->with('success', 'Data Delete successfully');
    }

    public function excel()
	{
		return Excel::download(new ContactExport, 'contact.xlsx');
	}
}
