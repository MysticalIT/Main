<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("/sales/salesAddClients");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$val = new validator();
        $this->validate($request, [
            "clientFirstName" => "required|string|filled",
            "clientLastName" => "required|string|filled",
            "street" => "required|string|filled",
            "house_number" => "required|string|filled",
            "zip_code" => "required|string|filled",
            "city" => "required|string|filled",
            "email" => "required|string|filled|email|unique:tbl_clients,email",
            "companyName" => "required|string|filled",
            "phoneNumber" => "required|string|filled",
        ]);

        $client = new \App\Client();
        $client->firstname = $request->clientFirstName;
        $client->lastname = $request->clientLastName;
        $client->street = $request->street;
        $client->house_number = $request->house_number;
        $client->zip_code = $request->zip_code;
        $client->city = $request->city;
        $client->email = $request->email;
        $client->companyName = $request->companyName;
        $client->phonenumber = $request->phoneNumber;
        $client->save();

        session(["message" => "Client added!"]);
        return redirect("/sales");
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
        $client = \App\Client::find($id);
        return view("/sales/salesEditClients")->with("client", $client);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
