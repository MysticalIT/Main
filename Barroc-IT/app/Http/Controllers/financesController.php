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
                return view("/finance/financeMain");
            }
            return redirect("/" . session()->get("department"));
        }
        else{
            return redirect("/");
        }
    }
}
