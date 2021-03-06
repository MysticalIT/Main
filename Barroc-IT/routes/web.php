<?php
//
///*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register web routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| contains the "web" middleware group. Now create something great!
//|
//*/
////===================login files===================
//Route::resource('/index',  fucntion() {
//    if(session()->has("department"))
//    {
//        return redirect("/".session()->get("department"));
//    }
//    return view('index');
//});
//
//Route::post('/', function (\Illuminate\Http\Request $request){
//    require ("../app/loginDepartment.php");
//    $loginResult = login($request);
//    if($loginResult === true){
//        $dep = $request["department"];
//        session(["department" => "$dep"]);
//        return redirect()->to("/$dep");
//    }
//    else if($loginResult === "password"){
//        session(["message" => "Password invalid!"]);
//        return redirect("/");
//    }
//    else if($loginResult === "username"){
//        session(["message" => "Department does not exist!"]);
//        return redirect("/");
//    }
//    else{
//        return redirect("/");
//    }
//});
//
//Route::get('/logout', function () {
//    session()->flush("department");
//    session(["message" => "You have been logged out"]);
//    return redirect("/");
//});
////===================sales===================
//Route::get('/sales', function () {
//    if(session()->has("department"))
//    {
//        if(session()->get("department") === "sales")
//        {
//            return view('sales/salesMain');
//        }
//        return redirect("/".session()->get("department"));
//    }
//    session(["message" => "You do not have access. Please login."]);
//    return redirect("/");
//});
//
//Route::get('/addclient' , function(){
//    if(session()->has("department"))
//    {
//        if(session()->get("department") === "sales")
//        {
//            return view('sales/salesAddClients');
//        }
//        return redirect("/".session()->get("department"));
//    }
//    session(["message" => "You do not have access. Please login."]);
//    return redirect("/");
//});
//Route::post('/addclient' , function(\Illuminate\Http\Request $request){
//    if(session()->has("department"))
//    {
//        if(session()->get("department") === "sales")
//        {
//            require("../app/clientControl.php");
//            addClient($request);
//            return redirect("/".session()->get("department"));
//        }
//        return redirect("/".session()->get("department"));
//    }
//    session(["message" => "You do not have access. Please login."]);
//    return redirect("/");
//});
//Route::get('/editclient' , function(){
//    if(session()->has("department"))
//    {
//        if(session()->get("department") === "sales")
//        {
//            return view('sales/salesEditClients');
//        }
//        return redirect("/".session()->get("department"));
//    }
//    session(["message" => "You do not have access. Please login."]);
//    return redirect("/");
//});
//Route::post('/editclient' , function(\Illuminate\Http\Request $request){
//    if(session()->has("department"))
//    {
//        if(session()->get("department") === "sales")
//        {
//            require("../app/clientControl.php");
//            editClient($request);
//            return redirect("/".session()->get("department"));
//        }
//        return redirect("/".session()->get("department"));
//    }
//    session(["message" => "You do not have access. Please login."]);
//    return redirect("/");
//});
//Route::get('/callclient' , function(){
//    if(session()->has("department"))
//    {
//        if(session()->get("department") === "sales")
//        {
//            return view('sales/salesContactClientsList');
//        }
//        return redirect("/".session()->get("department"));
//    }
//    session(["message" => "You do not have access. Please login."]);
//    return redirect("/");
//});
//Route::get('/addproject' , function(){
//    if(session()->has("department"))
//    {
//        if(session()->get("department") === "sales")
//        {
//            return view('sales/salesAddProject');
//        }
//        return redirect("/".session()->get("department"));
//    }
//    session(["message" => "You do not have access. Please login."]);
//    return redirect("/");
//});
//Route::post('/addproject' , function(){
//    if(session()->has("department"))
//    {
//        if(session()->get("department") === "sales")
//        {
//            echo "ADDED";
//            dd();
//        }
//        return redirect("/".session()->get("department"));
//    }
//    session(["message" => "You do not have access. Please login."]);
//    return redirect("/");
//});
//Route::get('/editproject' , function(){
//    if(session()->has("department"))
//    {
//        if(session()->get("department") === "sales")
//        {
//            return view('sales/salesEditProject');
//        }
//        return redirect("/".session()->get("department"));
//    }
//    session(["message" => "You do not have access. Please login."]);
//    return redirect("/");
//});
////===================development files===================
//Route::get('/development', function () {
//    if(session()->has("department"))
//    {
//        if(session()->get("department") === "development")
//        {
//            return view('development/developmentMain');
//        }
//        return redirect("/".session()->get("department"));
//    }
//    session(["message" => "You do not have access. Please login."]);
//    return redirect("/");
//});
//Route::get('/projects', function () {
//    if(session()->has("department"))
//    {
//        if(session()->get("department") === "development")
//        {
//            return view('development/developmentProjects');
//        }
//        return redirect("/".session()->get("department"));
//    }
//    session(["message" => "You do not have access. Please login."]);
//    return redirect("/");
//});
////===================finance files===================
//Route::get('/finance', function () {
//    if(session()->has("department"))
//    {
//        if(session()->get("department") === "finance")
//        {
//            return view('finance/financeMain');
//        }
//        return redirect("/".session()->get("department"));
//    }
//    session(["message" => "You do not have access. Please login."]);
//    return redirect("/");
//});
//Route::get('/invoices', function () {
//    if(session()->has("department"))
//    {
//        if(session()->get("department") === "finance")
//        {
//            return view('finance/financeInvoices');
//        }
//        return redirect("/".session()->get("department"));
//    }
//    session(["message" => "You do not have access. Please login."]);
//    return redirect("/");
//});
//Route::get('/bkrcheck', function () {
//    if(session()->has("department"))
//    {
//        if(session()->get("department") === "finance")
//        {
//            return view('finance/financeBkrcheck');
//        }
//        return redirect("/".session()->get("department"));
//    }
//    session(["message" => "You do not have access. Please login."]);
//    return redirect("/");
//});
//Route::post('/bkrcheck', function (\Illuminate\Http\Request $request) {
//    require ("../app/financeFunctions.php");
//    updateBkr($request);
//    return redirect("/bkrcheck");
//});
//Route::get('/createInvoice', function () {
//    if(session()->has("department"))
//    {
//        if(session()->get("department") === "finance")
//        {
//            return view('finance/financeCreateInvoice');
//        }
//        return redirect("/".session()->get("department"));
//    }
//    session(["message" => "You do not have access. Please login."]);
//    return redirect("/");
//});
////===================admin files===================
//Route::get('/admin', function () {
//    if(session()->has("department"))
//    {
//        if(session()->get("department") === "admin")
//        {
//            return view('admin/adminMain');
//        }
//        return redirect("/".session()->get("department"));
//    }
//    session(["message" => "You do not have access. Please login."]);
//    return redirect("/");
//});
//Route::get('/activateClients', function () {
//    if(session()->has("department"))
//    {
//        if(session()->get("department") === "admin")
//        {
//            return view('admin/adminClients');
//        }
//        return redirect("/".session()->get("department"));
//    }
//    session(["message" => "You do not have access. Please login."]);
//    return redirect("/");
//});
////===================GENERAL FILES==================
//Route::get('/memo' , function(){
//    if(session()->has("department"))
//    {
//        $dep = session()->get("department");
//        if($dep === "sales")
//        {
//            return view('sales/salesMemo');
//        }
//        elseif ($dep === "development"){
//            return view('development/developmentMemo');
//        }
//        elseif ($dep === "finance"){
//            return view('finance/financeMemo');
//        }
//        elseif ($dep === "admin"){
//            return view('admin/adminMemo');
//        }
//        return redirect("/".session()->get("department"));
//    }
//    session(["message" => "You do not have access. Please login."]);
//    return redirect("/");
//});
//Route::post('/memoUpdate', function ()
//{
//    if(session()->has("department"))
//    {
//        $dep = session()->get("department");
//        if($dep === "sales")
//        {
//            return view('../../app/memoUpdate.php');
//        }
//        elseif ($dep === "development"){
//            return view('../../app/memoUpdate.php');
//        }
//        elseif ($dep === "finance"){
//            return view('../../app/memoUpdate.phpfinance/financeMemo');
//        }
//        elseif ($dep === "admin"){
//            return view('../../app/memoUpdate.php');
//        }
//        return redirect("/".session()->get("department"));
//    }
//    session(["message" => "You do not have access. Please login."]);
//    return redirect("/");
//});
//Route::get('/404' , function(){
//    return view("   404_page");
//});
//Route::get('/faker', function ()
//{
//    if(session()->has("department"))
//    {
//        if(session()->get("department") === "admin")
//        {
//            return view("admin/adminFaker");
//        }
//        return redirect("/".session()->get("department"));
//    }
//    session(["message" => "You do not have access. Please login."]);
//    return redirect("/");
//
//});
//User
Route::get("/", "usersController@index");
Route::post("/login", "usersController@login");
Route::get("/logout", "usersController@logout");

//Sales
Route::get("/sales", "salesController@index");
Route::resource("/clients", "clientsController");
Route::get("/contact", "salesController@contact");
Route::resource("/projects", "projectsController");


//Finance
Route::get("/invoices/{id}/create", "invoicesController@create");
Route::resource("/invoices", "invoicesController");
Route::get("/finance", "financesController@index");
Route::get("/bkrCheck", "financesController@bkrCheckPage");
Route::post("/bkrCheck", "financesController@bkrCheckStore");
Route::get("/finance/{id}/inactive", "financesController@inactive");
Route::get("/invoices/{id}/paid", "invoicesController@paid");


//Development
Route::resource("/development", "DevelopmentController");
Route::get("/development/{id}/project","DevelopmentController@show");
Route::get("/development/{id}/start", "DevelopmentController@start");
Route::get("/development/{id}/finish", "DevelopmentController@finish");

//Admin
Route::get("/admin", "AdminController@index");
Route::get("/admin/{id}/active", "AdminController@setactive");



//IDK
Route::resource("/memo", "memosController");

//Route::get("/faker", function(){
//	return view("admin/adminFaker");
//});
//
//Route::POST("/faker", function(){
//    return view("admin/adminFaker");
//});
//
//Route::get("/fakerproject", function(){
//    return view("admin/adminFakerProjects");
//});
//
//Route::POST("/fakerproject", function(){
//    return view("admin/adminFakerProjects");
//});
//
//Route::get("/fakerinvoice", function(){
//    return view("admin/adminInvoicesFaker");
//});
//
//Route::POST("/fakerinvoice", function(){
//    return view("admin/adminInvoicesFaker");
//});
//Route::resource("/client", "clientsController");
//Route::resource("/project", "projectsController");
//Route::resource("/memo", "memosController");
//Route::resource("/user", "usersController");
//Route::resource("/invoice", "invoiceController");
