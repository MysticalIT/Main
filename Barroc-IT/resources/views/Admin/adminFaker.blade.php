<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset("css/main.css") }}">
    <title>Admin - Faker</title>
</head>
<body>
<div class="header">
    <div class="container">
        <div class="logo">
            <h1>Barroc IT</h1>
        </div>
    </div>
</div>
<div class="main-content">
    <form action="" method="get">
        <label for="amount">How many fake people do you want?</label>
        <input type="text" name="amount" id="amount">

        <input type="submit" value="Add">
    </form>
</div>
</body>
</html>

<?php
    if(isset($_GET["amount"]) && $_GET["amount"] > 0)
    {
        $amount = $_GET["amount"];
        for($i = 0; $i < $amount; $i++)
        {
            $faker = Faker\Factory::create();
            DB::table("tbl_clients")->insert(
                [
                    "firstName" => $faker->firstName,
                    "lastName" => $faker->lastName,
                    "street" => $faker->streetName,
                    "house_number" => $faker->buildingNumber,
                    "city" => $faker->city,
                    "zip_code" => $faker->postcode,
                    "company_name" => $faker->company,
                    "email" => $faker->companyEmail,
                    "phonenumber" => $faker->phoneNumber
                ]
            );
        }
        session(["message" => "Faker added $amount people!"]);
        echo "<script> window.location.href = '/admin';</script>";
    }
