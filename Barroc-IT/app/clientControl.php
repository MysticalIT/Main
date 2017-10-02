<?php

function addClient($request)
{
    $company = $request["companyName"];
    $street = $request["street"];
    $houseNumber = $request["house-number"];
    $city = $request["city"];
    $zipCode = $request["zip-code"];
    $firstName = $request["clientFirstName"];
    $lastName = $request["clientLastName"];
    $phoneNumber = $request["phoneNumber"];
    $email = $request["email"];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        session(["message" => "You are using a invalid email"]);
        return;
    }

    DB::table("tbl_clients")->insert(
        [
            "firstName" => $firstName,
            "lastName" => $lastName,
            "street" => $street,
            "house_number" => $houseNumber,
            "city" => $city,
            "zip_code" => $zipCode,
            "company_name" => $company,
            "email" => $email,
            "phonenumber" => $phoneNumber
        ]
    );
    session(["message" => "Client added!"]);
    return;
}

function editClient($request)
{
    $clientId = $request["clientid"];
    $company = $request["companyName"];
    $street = $request["street"];
    $houseNumber = $request["house-number"];
    $city = $request["city"];
    $zipCode = $request["zip-code"];
    $firstName = $request["clientFirstName"];
    $lastName = $request["clientLastName"];
    $phoneNumber = $request["phoneNumber"];
    $email = $request["email"];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        session(["message" => "You are using a invalid email"]);
        return;
    }

    DB::table("tbl_clients")->where("id", $clientId)->update(
        [
            "firstName" => $firstName,
            "lastName" => $lastName,
            "street" => $street,
            "house_number" => $houseNumber,
            "city" => $city,
            "zip_code" => $zipCode,
            "company_name" => $company,
            "email" => $email,
            "phonenumber" => $phoneNumber
        ]
    );
    session(["message" => "Client edited!"]);
    return;
}

