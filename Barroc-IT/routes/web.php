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
//===================login files===================
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
//===================sales===================
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

Route::get('/addclient' , function(){
    if(session()->has("department"))
    {
        if(session()->get("department") === "sales")
        {
            return view('sales/salesEditClients');
        }
        return redirect("/".session()->get("department"));
    }
    session(["message" => "You don't have access. Please login."]);
    return redirect("/");
});
Route::get('/callclient' , function(){
    if(session()->has("department"))
    {
        if(session()->get("department") === "sales")
        {
            return view('sales/salesCallClientsList');
        }
        return redirect("/".session()->get("department"));
    }
    session(["message" => "You don't have access. Please login."]);
    return redirect("/");
});
Route::get('/addproject' , function(){
    if(session()->has("department"))
    {
        if(session()->get("department") === "sales")
        {
            return view('sales/salesAddProject');
        }
        return redirect("/".session()->get("department"));
    }
    session(["message" => "You don't have access. Please login."]);
    return redirect("/");
});
//===================development files===================
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
//===================finace files===================
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
//===================admin files===================
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
//===================GENERAL FILES==================
Route::get('/memo' , function(){
    if(session()->has("department"))
    {
        $dep = session()->get("department");
        if($dep === "sales")
        {
            return view('sales/salesMemo');
        }
        elseif ($dep === "development"){
            return view('development/developmentMemo');
        }
        elseif ($dep === "finance"){
            return view('finance/financeMemo');
        }
        return redirect("/".session()->get("department"));
    }
    session(["message" => "You don't have access. Please login."]);
    return redirect("/");
});
