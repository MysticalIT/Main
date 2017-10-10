<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class financesController extends Controller
{
    public function index()
    {
        $department = "finance";
        if(session()->has("department")){
            if(session()->get("department") === $department){
                $clients = \App\Client::all();
                return view("/finance/financeMain")->with("clients", $clients);
            }
            return redirect("/" . session()->get("department"));
        }
        else{
            return redirect("/");
        }
    }
    public function inactive($id)
    {
        return redirect("/");
    }
}
