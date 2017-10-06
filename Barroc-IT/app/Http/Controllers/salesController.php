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
        $clients = \App\Client::all();
        return view("/sales/salesMain")->with("clients", $clients);
    }

    public function contact()
    {
        $clients = \App\Client::all()->where("bkrapproved", "=", "1");
        $projects = \App\Project::all();
        return view("/sales/salesContactClientsList ")->with(["clients" => $clients, "projects" => $projects]);
    }
}
