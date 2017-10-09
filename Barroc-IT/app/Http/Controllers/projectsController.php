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
            "" => "required|string|filled",
            "projectName" => "required|string|filled",
            "projectDetails" => "required|string|filled",
        ]);

        $project = new \App\Project();
        $project->projectName = $request->projectName;
        $project->projectDetails = $request->projectDetails;
        $project->save();

        session(["message" => "Project is added with the selected client!"]);
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
                return view("/sales/salesEditProject")->with("project", $project);
            }
            return redirect("/" . session()->get("department"));
        }
        else{
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
            "" => "required|string|filled",
            "projectName" => "required|string|filled",
            "projectDetails" => "required|string|filled",
        ]);

        $project = \App\Project::find($id);
        $project->projectName = $request->projectName;
        $project->projectDetails = $request->projectDetails;
        $project->save();
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
