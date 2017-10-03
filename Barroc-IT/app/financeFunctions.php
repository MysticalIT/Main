<?php

function updateBkr($request)
{
    $bkrChecked = $request["checked"];
    $bkrApproved = $request["approved"];
    $clientId = session()->get("clientId");

    if($bkrChecked == "on")
    {
        $bkrChecked = 1;
    }

    if ($bkrApproved == "on")
    {
        $bkrApproved = 1;
    }
    
    DB::table("tbl_clients")->where("id", $clientId)->update(
        [
            "bkrchecked" => $bkrChecked,
            "bkrapproved" => $bkrApproved
        ]
    );
    session()->remove("clientId");
    return;
}