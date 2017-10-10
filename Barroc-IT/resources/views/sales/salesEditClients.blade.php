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
<header>
    <div class="links">
        <div class="wrapper">
            <ul class="mainNav">
                <li><a href="/sales">Back</a></li>
                <li><a href="/add?showHelp=true">Help</a></li>

            </ul>

        </div>
    </div>
</header>
@php
    $firstName = $client->firstname;
    $lastName = $client->lastname;
    $street = $client->street;
    $houseNumber = $client->house_number;
    $zipCode = $client->zip_code;
    $city = $client->city;
    $email = $client->email;
    $companyName = $client->company_name;
    $phoneNumber = $client->phonenumber;
@endphp

<div class="main-content">
    <div class="container-fluid">
        <form method="post" action="/clients/{{$client->id}}" class="add-client">
            {{csrf_field()}}
            {{method_field('PUT')}}

            <div class="form-group">
                <label for="companyName">Client company name:</label>
                <input type="text" name="companyName" id="companyName" value="{{$companyName}}">
            </div>

            <div class="form-group">
                <label for="street">Client street:</label>
                <input type="text" name="street" id="street" value="{{$street}}">
            </div>

            <div class="form-group">
                <label for="house-number">Client house number:</label>
                <input type="text" name="house_number" id="house-number" value="{{$houseNumber}}">
            </div>

            <div class="form-group">
                <label for="city">Client city:</label>
                <input type="text" name="city" id="city" value="{{$city}}">
            </div>

            <div class="form-group">
                <label for="zip-code">Client zip-code</label>
                <input type="text" name="zip_code" id="zip-code" value="{{$zipCode}}">
            </div>

            <div class="form-group">
                <label for="clientFirstName">Client first name</label>
                <input type="text" name="clientFirstName" id="clientFirstName" value="{{$firstName}}">
            </div>

            <div class="form-group">
                <label for="clientLastName">Client last name</label>
                <input type="text" name="clientLastName" id="clientLastName" value="{{$lastName}}">
            </div>

            <div class="form-group">
                <label for="phoneNumber">Client phone number</label>
                <input type="text" name="phoneNumber" id="phoneNumber" value="{{$phoneNumber}}">
            </div>

            <div class="form-group">
                <label for="email">Client email:</label>
                <input type="text" name="email" id="email" value="{{$email}}">
            </div>

            <div class="form-group">
                <input class="btn-primary" type="submit" value="Edit {{$client->firstname}} {{$client->lastname}}'s info">
            </div>

        </form>



    </div>
</div>
</body>
</html>