<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class salesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $department = "sales";
        if(session()->has("department")){
            if(session()->get("department") === $department){
                $clients = \App\Client::all();
                return view("/sales/salesMain")->with("clients", $clients);
            }
            return redirect("/" . session()->get("department"));
        }
        else{
            return redirect("/");
        }

    }

    public function contact()
    {
        $department = "sales";
        if(session()->has("department")){
            if(session()->get("department") === $department){
                $clients = \App\Client::all()->where("bkrapproved", "=", "1");
                $projects = \App\Project::all();
                return view("/sales/salesContactClientsList ")->with(["clients" => $clients, "projects" => $projects]);
            }
            return redirect("/" . session()->get("department"));
        }
        else{
            return redirect("/");
        }

    }
}
