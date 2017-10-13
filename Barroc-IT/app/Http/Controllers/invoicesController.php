<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class invoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $department = "finance";
        if(session()->has("department")){
            if(session()->get("department") === $department){
                $invoices = \App\Invoice::all();
                $projects = \App\Project::all();

                return view("/finance/financeInvoices")->with([
                    "invoices" => $invoices,
                    "projects" => $projects
                ]);
            }
            return redirect("/" . session()->get("department"));
        }
        else{
            return redirect("/");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $department = "finance";
        if(session()->has("department")){
            if(session()->get("department") === $department){
                $projectId = $id;
                return view("finance/financeCreateInvoice")->with("projectId", $projectId);
            }
            return redirect("/" . session()->get("department"));
        }
        else{
            return redirect("/");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invoice = new \App\Invoice();
        $invoice->project_id = $request->project_id;
        $invoice->subject = $request->subject;
        $invoice->price = $request->price;
        $invoice->save();

        return redirect("/invoices");
    }

    public function paid($id){
        $invoice = \App\Invoice::find($id);
        $invoice->paid = 1;
        $invoice->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
