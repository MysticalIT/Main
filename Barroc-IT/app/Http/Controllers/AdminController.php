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
}
