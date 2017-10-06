<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("/sales/salesAddProject");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "" => "required|string|filled",
            "clientLastName" => "required|string|filled",
            "street" => "required|string|filled",
            "house_number" => "required|string|filled",
            "zip_code" => "required|string|filled",
            "city" => "required|string|filled",
            "email" => "required|string|filled|email|unique:tbl_clients,email",
            "companyName" => "required|string|filled",
            "phoneNumber" => "required|string|filled",
        ]);

        $project = new \App\Project();
        $project->projectName = $request->projectName;
        $project->projectDetails = $request->projectDetails;
        $project->save();

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
        $project = \App\Client::find($id);
        return view("/sales/salesEditProject")->with("project", $project);
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
