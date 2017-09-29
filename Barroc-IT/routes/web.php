<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::post('/', function (\Illuminate\Http\Request $request){
    require ("../app/loginDepartment.php");
    $loginResult = login($request);
    if($loginResult === true){
        $dep = $request["department"];
        session(["department" => "$dep"]);
        return redirect()->to("/$dep");
    }
    else if($loginResult === "password"){
        session(["message" => "Password invalid!"]);
        return redirect()->to("/")->with('new_token', csrf_token());
    }
    else if($loginResult === "username"){
        session(["message" => "Department does not exist!"]);
        return redirect()->to("/")->with('new_token', csrf_token());
    }
    else{
        return redirect()->to("/")->with('new_token', csrf_token());
    }
});

Route::get('/logout', function () {
    session()->flush("department");
    session(["message" => "You have been logged out"]);
    return redirect()->to("/")->with('new_token', csrf_token    ());
});

Route::get('/sales', function () {
    return view('sales/salesMain');
});

