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
        return redirect("/$dep");
    }
    else if($loginResult === "password"){
        session(["message" => "Password invalid!"]);
        return redirect("/");
    }
    else if($loginResult === "username"){
        session(["message" => "Department does not exist!"]);
        return redirect("/");
    }
    else{
        return redirect("/");
    }
});

Route::get('/logout', function () {
    session()->flush();
    session(["message" => "You have been logged out\nWhy the hell nod!"]);
    return view('index');
});

Route::get('/sales', function () {
    return view('sales/salesMain');
});

