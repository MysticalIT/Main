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
        $clients = \App\Client::find($id);
        $client = $clients;

        $client->active = 0;
        $client->save();
        return redirect("/finance");
    }
    public function bkrCheckPage()
    {
        $clients = \App\Client::all()->where("bkrchecked", "=", "0");
        return view("/finance/financeBkrcheck")->with("clients", $clients);
    }
    public function bkrCheckStore(Request $request)
    {
        $id = $_GET["clientId"];
        $clients = \App\Client::all()->where("id", $id)->first();
        $client = $clients;
        $checked = $request->checked;
        $approved = $request->approved;
        if(isset($id))
        {
            if (isset($checked))
            {
                $checked = 1;
                $client->bkrchecked = $checked;
                $client->save();
            }

            if (isset($approved))
            {
                $approved = 1;
                $client->bkrapproved = $approved;
                $client->save();
            }
            //session(["message" => "BKR settings SET"]);
            return redirect("/finance");

        }
        else
        {
            return redirect("/");
        }
    }
    public function setInactive()
    {

    }
}
