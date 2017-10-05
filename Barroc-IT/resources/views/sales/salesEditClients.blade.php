<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset("css/main.css") }}">
    <title>Edit client</title>
</head>
<body>
<div class="links">
    <div class="wrapper">
        <ul class="headerButtons">
            <a href="/sales">Back</a>
        </ul>
    </div>
</div>
<?php
        $clientid = session()->get("clientId");
        $client = DB::table("tbl_clients")->where("id", $clientid)->get();

        if (count($client) > 0)
        {
            $firstName = $client[0]->firstname;
            $lastName = $client[0]->lastname;
            $street = $client[0]->street;
            $houseNumber = $client[0]->house_number;
            $zipCode = $client[0]->zip_code;
            $city = $client[0]->city;
            $email = $client[0]->email;
            $companyName = $client[0]->company_name;
            $phoneNumber = $client[0]->phonenumber;
        }
        else
            header("location: /sales");


        echo "
    <form method='post' action=''>";
    ?>
        {{csrf_field()}}
    <?php
    echo "
    <input type='hidden' value='$clientid'>

    <label for='companyName'>Client company name:</label>
    <input type='text' name='companyName' id='companyName' value='$companyName'>

    <label for='street'>Client street:</label>
    <input type='text' name='street' id='street' value='$street'>

    <label for='house-number'>Client house number:</label>
    <input type='text' name='house_number' id='house-number' value='$houseNumber'>

    <label for='city'>Client city:</label>
    <input type='text' name='city' id='city' value='$city'>

    <label for='zip-code'>Client zip-code</label>
    <input type='text' name='zip_code' id='zip-code' value='$zipCode'>

    <label for='clientFirstName'>Client first name</label>
    <input type='text' name='clientFirstName' id='clientFirstName' value='$firstName'>

    <label for='clientLastName'>Client last name</label>
    <input type='text' name='clientLastName' id='clientLastName' value='$lastName'>

    <label for='phoneNumber'>Client phone number</label>
    <input type='text' name='phoneNumber' id='phoneNumber' value='$phoneNumber'>

    <label for='email'>Client email:</label>
    <input type='text' name='email' id='email' value='$email'>

    <input type='submit' value='Edit client'>
    </form>
        ";
        ?>



</body>
</html>