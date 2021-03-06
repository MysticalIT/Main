<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevelopmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = \App\Project::all();
        $invoices = \App\Invoice::all()->where("paid", "=", false);

        $department = "development";
        if(session()->has("department")){
            if(session()->get("department") === $department){

                return view("/development/developmentMain")->with(["projects" => $projects, "invoices" => $invoices]);
            }
            session(["message" => "Something went wrong here :/"]);
            return redirect("/" . session()->get("department"));
        }
        else{
            session(["message" => "Something went wrong here :/"]);
            return redirect("/");
        }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projects = \App\Project::all()->where("id", "=", $id)->first();
        $clients = \App\client::all()->where("id", "=", $projects->client_id)->first();

        $client = $clients;
        $project = $projects;


        if(isset($id))
        {
            return view("/development/developmentProjects")->with("project",$project)->with("client", $client);
        }
        else{
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function start($id)
    {
        $projectid= $id;

        $projects= \App\Project::all()->where("id", "=", $projectid)->first();

        $project = $projects;

        $project->started = 1;
        $project->save();
		session(["message" => "Project Started"]);
        return redirect("/development/$id/");

    }
    public function finish($id)
    {
        $projectid= $id;

        $projects= \App\Project::all()->where("id", "=", $projectid)->first();

        $project = $projects;

        $project->finished = 1;
        $project->save();

        session(["message" => "Project Finished"]);
        return redirect("/development/$id/");
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
