<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $useradmin = User::all();
        return view('user.user',['useradmin' => $useradmin,"title" => "user"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $useradmin = User::all();
        return view('user.create',['user' => $useradmin,"title" => "user"]);
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
            'phone_number' => 'required',
            'email' => 'required',
            'password' => 'required',
            'address' => 'required',
        ]);

        $input = $request->all();
        User::create($input);

        return redirect('/dashboard/useradmin')->with('success', 'Data Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id, User $user)
    {
        $useradmin = User::findOrFail($id);
        return view('user.show', ['useradmin' => $useradmin,"title"=>"user"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id, User $user)
    {
        $useradmin = User::findOrFail($id);
        return view('user.edit',compact(['useradmin']),["title"=>"user"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, User $user)
    {
        $useradmin = User::findOrFail($id);
        $useradmin->update($request->all());
        return redirect('/dashboard/useradmin')->with('success','Data Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, User $user)
    {
        Schema::disableForeignKeyConstraints();
        $useradmin = User::findOrFail($id);
        $useradmin -> delete();
        Schema::enableForeignKeyConstraints();

        return redirect('/dashboard/useradmin')->with('success', 'Data Delete successfully');
    }

    public function export()
	{
		return Excel::download(new UserExport, 'user.xlsx');
	}
}
