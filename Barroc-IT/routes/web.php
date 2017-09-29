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
    session()->flush("department");
    session(["message" => "You have been logged out"]);
    return redirect("/");
});

Route::get('/sales', function () {
    if(session()->has("department"))
    {
        if(session()->get("department") === "sales")
        {
            return view('sales/salesMain');
        }
        return redirect("/".session()->get("department"));
    }
    session(["message" => "You don't have access. Please login."]);
    return redirect("/");
});

Route::get('/development', function () {
    if(session()->has("department"))
    {
        if(session()->get("department") === "development")
        {
            return view('development/developmentMain');
        }
        return redirect("/".session()->get("department"));
    }
    session(["message" => "You don't have access. Please login."]);
    return redirect("/");
});

Route::get('/finance', function () {
    if(session()->has("department"))
    {
        if(session()->get("department") === "finance")
        {
            return view('finance/financeMain');
        }
        return redirect("/".session()->get("department"));
    }
    session(["message" => "You don't have access. Please login."]);
    return redirect("/");
});

Route::get('/admin', function () {
    if(session()->has("department"))
    {
        if(session()->get("department") === "admin")
        {
            return view('admin/adminMain');
        }
        return redirect("/".session()->get("department"));
    }
    session(["message" => "You don't have access. Please login."]);
    return redirect("/");
});

