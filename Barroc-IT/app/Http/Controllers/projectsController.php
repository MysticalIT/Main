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
        $department = "sales";
        if(session()->has("department")){
            if(session()->get("department") === $department){
                return view("/sales/salesAddProject");
            }
            return redirect("/" . session()->get("department"));
        }
        else{
            return redirect("/");
        }

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
            "projectName" => "required|string|filled",
            "projectDetails" => "required|string|filled",
            "setInvoice" => "required|numeric"
        ]);

        $project = new \App\Project();
        $project->client_id = $request->id;
        $project->name = $request->projectName;
        $project->description = $request->projectDetails;
        $project->limit = $request->setInvoice;
        $project->started = 1;
        $project->save();

        $clientInfo = \App\Client::find($request->id)->first();

        $memo = new \App\Memo();
        $memo->project_id = $project->id;
        $memo->memo = "Project Name: {$project->name},
Owner Name: {$clientInfo->firstname} {$clientInfo->lastname},
";
        $memo->save();

        session(["message" => "Project is added!"]);
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
        $department = "sales";
        if(session()->has("department")){
            if(session()->get("department") === $department){
                $project = \App\Client::find($id);
                session(["message" => "Project has been edited!"]);
                return view("/sales/salesEditProject")->with("project", $project);
            }
            return redirect("/" . session()->get("department"));
        }
        else{
            session(["message" => "Something went wrong here :/"]);
            return redirect("/");
        }

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
        $this->validate($request, [
            "projectName" => "required|string|filled",
            "projectDetails" => "required|string|filled",
            "setInvoice" => "required|numeric"
        ]);

        $project = \App\Project::find($id);
        $project->name = $request->projectName;
        $project->description = $request->projectDetails;
        $project->limit = $request->setInvoice;
        $project->save();

        session(["message" => "Project is edited!"]);
        return redirect("/sales");
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
