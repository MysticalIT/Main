<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class memosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session()->has("department"))
        {
            $department = session()->get("department");
            if ($department == "sales")
            {
                $projects = \App\Project::all();
                $memos = \App\Memo::all();
                return view("/sales/salesMemo")->with(["projects" => $projects, "memos" => $memos]);
            }
            if ($department == "finance")
            {
                $projects = \App\Project::all();
                $memos = \App\Memo::all();
                return view("/finance/financeMemo")->with(["projects" => $projects, "memos" => $memos]);
            }
            if ($department == "development")
            {
                $projects = \App\Project::all();
                $memos = \App\Memo::all();
                return view("/development/developmentMemo")->with(["projects" => $projects, "memos" => $memos]);
            }
            if ($department == "admin")
            {

            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $memo = \App\Memo::find($id);
        if (preg_match("/Owner Project:/",$memo->memo)) {
            $memo->memo = $request->memo;
            $memo->save();

            session(["message" => "Memo updated"]);
            return redirect("/".session()->get("department"));
        }
        else{
            session(["message" => "Dont remove the pre-made part."]);
            return redirect("/memo");
        }

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
