<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $department = "admin";
        if(session()->has("department")){
            if(session()->get("department") === $department){
                return view("/admin/adminMain");
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
                $client->save;

                return view("/admin/adminMain");
            }
            return redirect("/" . session()->get("department"));
        }
        else{
            return redirect("/");
        }
    }
}
