<?php


function login($request){
    $dep = $request["department"];
    $pass = $request["password"];

    $resultFromUsername = DB::table("tbl_users")->where("username", "$dep")->get();

    if(count($resultFromUsername) > 0){
        if($resultFromUsername[0]->password === $pass){
            return true;
        }
        else{
            return "password";
        }
    }
    else {
        return "username";
    }
}