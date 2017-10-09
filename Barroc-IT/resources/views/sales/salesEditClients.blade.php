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
    <form method="post" action="/clients/{{$client->id}}">
        {{csrf_field()}}

        <label for="companyName">Client company name:</label>
        <input type="text" name="companyName" id="companyName" value="{{$companyName}}">

        <label for="street">Client street:</label>
        <input type="text" name="street" id="street" value="{{$street}}">

        <label for="house-number">Client house number:</label>
        <input type="text" name="house_number" id="house-number" value="{{$houseNumber}}">

        <label for="city">Client city:</label>
        <input type="text" name="city" id="city" value="{{$city}}">

        <label for="zip-code">Client zip-code</label>
        <input type="text" name="zip_code" id="zip-code" value="{{$zipCode}}">

        <label for="clientFirstName">Client first name</label>
        <input type="text" name="clientFirstName" id="clientFirstName" value="{{$firstName}}">

        <label for="clientLastName">Client last name</label>
        <input type="text" name="clientLastName" id="clientLastName" value="{{$lastName}}">

        <label for="phoneNumber">Client phone number</label>
        <input type="text" name="phoneNumber" id="phoneNumber" value="{{$phoneNumber}}">

        <label for="email">Client email:</label>
        <input type="text" name="email" id="email" value="{{$email}}">

        <input class="btn-primary" type="submit" value="Edit {{$client->firstname}} {{$client->lastname}}'s info">
    </form>
</body>
</html>