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
    <div class="container-fluid">
        <form action="" method="post" class="add-client">
            {{csrf_field()}}
            <div class="form-group form-group-add">
                <label for="firstName">First Name</label>
                <input type="text" name="firstName" id="firstName">
            </div>
            <div class="form-group form-group-add">
                <label for="lastName">Last Name</label>
                <input type="text" name="lastName" id="lastName">
            </div>
            <div class="form-group form-group-add">
                <label for="street">Street</label>
                <input type="text" name="street" id="street">
            </div>
            <div class="form-group form-group-add">
                <label for="house_number">House Number</label>
                <input type="text" name="house_number" id="house_number">
            </div>
            <div class="form-group form-group-add">
                <label for="city">City</label>
                <input type="text" name="city" id="city">
            </div>
            <div class="form-group form-group-add">
                <label for="zip_code">Zip Code</label>
                <input type="text" name="zip_code" id="zip_code">
            </div>
            <div class="form-group form-group-add">
                <label for="company_name">Company Name</label>
                <input type="text" name="company_name" id="company_name">
            </div>
            <div class="form-group form-group-add">
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="form-group form-group-add">
                <label for="phonenumber">Phone Number</label>
                <input type="text" name="phonenumber" id="phonenumber">
            </div>
            <div class="form-group form-group-add">
                <label for="bkrchecked">BKR Checked</label>
                <input type="number" name="bkrchecked" id="bkrchecked">
            </div>
            <div class="form-group form-group-add">
                <label for="bkrapproved">BKR Approved</label>
                <input type="number" name="bkrapproved" id="bkrapproved">
            </div>
            <div class="form-group form-group-add">
                <label for="amount">How many fake people do you want?</label>
                <input type="text" name="amount" id="amount">
            </div>
            <div class="form-group form-group-add">
                <input type="submit" value="Add">
            </div>
        </form>
    </div>
</div>
</body>
</html>

<?php
    if(isset($_POST["amount"]) && $_POST["amount"] > 0)
    {

        $amount = $_POST["amount"];
        for($i = 0; $i < $amount; $i++)
        {
            $faker = Faker\Factory::create();
            if (isset($_POST["firstName"]) && $_POST["firstName"] != "")
                $firstName = $_POST["firstName"];
            else
                $firstName = $faker->firstName;

            if (isset($_POST["lastName"]) && $_POST["lastName"] != "")
                $lastName = $_POST["lastName"];
            else
                $lastName = $faker->lastName;

            if (isset($_POST["street"]) && $_POST["street"] != "")
                $street = $_POST["street"];
            else
                $street = $faker->streetName;

            if (isset($_POST["house_number"]) && $_POST["house_number"] != "")
                $house_number = $_POST["house_number"];
            else
                $house_number = $faker->buildingNumber;

            if (isset($_POST["city"]) && $_POST["city"] != "")
                $city = $_POST["city"];
            else
                $city = $faker->city;

            if (isset($_POST["zip_code"]) && $_POST["zip_code"] != "")
                $zip_code = $_POST["zip_code"];
            else
                $zip_code = $faker->postcode;

            if (isset($_POST["company_name"]) && $_POST["company_name"] != "")
                $company_name = $_POST["company_name"];
            else
                $company_name = $faker->company;

            if (isset($_POST["email"]) && $_POST["email"] != "")
                $email = $_POST["email"];
            else
                $email = $faker->companyEmail;

            if (isset($_POST["phonenumber"]) && $_POST["phonenumber"] != "")
                $phonenumber = $_POST["phonenumber"];
            else
                $phonenumber = $faker->phoneNumber;

            if (isset($_POST["bkrchecked"]) && $_POST["bkrchecked"] != "")
                $bkrchecked = $_POST["bkrchecked"];
            else
                $bkrchecked = 0;

            if (isset($_POST["bkrapproved"]) && $_POST["bkrapproved"] != "")
                $bkrapproved = $_POST["bkrapproved"];
            else
                $bkrapproved = 0;

            $client = new App\Client();
            $client->firstName = $firstName;
            $client->lastName = $lastName;
            $client->street = $street;
            $client->house_number = $house_number;
            $client->city = $city;
            $client->zip_code = $zip_code;
            $client->company_name = $company_name;
            $client->email = $email;
            $client->phonenumber = $phonenumber;
            $client->bkrchecked = $bkrchecked;
            $client->bkrapproved = $bkrapproved;
            $client->save();
        }
        echo "<script>window.alert('Faker added $amount people!');</script>";
    }
