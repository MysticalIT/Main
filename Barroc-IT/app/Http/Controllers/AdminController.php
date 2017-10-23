<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $department = "admin";
        if(session()->has("department")){
            if(session()->get("department") === $department){
                $clients = \App\Client::all();
                return view("/admin/adminMain")->with("clients", $clients);
            }
            return redirect("/" . session()->get("department"));
        }
        else{
            return redirect("/");
        }
    }

    public function setactive($id){
        $department = "admin";
        if(session()->has("department")){
            if(session()->get("department") === $department){
                $client = \App\Client::find($id);
                $client->active = 1;
                $client->save();
                session(["message" => "Client has been set active"]);
                return redirect("/admin");
            }
            return redirect("/" . session()->get("department"));
        }
        else{
            return redirect("/");
        }
    }
}
