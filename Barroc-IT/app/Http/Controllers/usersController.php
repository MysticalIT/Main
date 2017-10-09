<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("index");
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            "department" => "required|string",
            "password" => "required|string"
        ]);

        $user = \App\User::all()->where("username", "=", $request["department"])->first();
        if($user->password === $request["password"]){
            session(["department" => $request["department"]]);
            return redirect("/" . session()->get("department"));
        }
        else{
            return redirect("/");
        }
    }

    public function logout()
    {
        session()->remove("department");
        return redirect("/");
    }
}
