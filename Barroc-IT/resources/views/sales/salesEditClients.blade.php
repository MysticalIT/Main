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
<?php
        $clientid = session()->get("clientId");

        echo "
    <form method='post' action=''>
        <label for='companyName'>Client company name:</label>
        <label for='adres'>Client adress:</label>
        <label for='zipcode'>Client zipcode</label>
        <label for='clientName'>Client name</label>
        <label for='phonenumber'>Client phonenumber</label>
        <label for='lastcontactPerson'>Last contacted person</label>
        <label for='lastcontactDate'>Last contacted date</label>
        
        <input type='text' name='companyName' id='companyName' value=''>
        <input type='text' name='adres' id='adres'>
        <input type='text' name='zipcode' id='zipcode'>
        <input type='text' name='clientName' id='clientName'>
        <input type='text' name='phonenumber' id='phonenumber'>
        <input type='text' name='lastcontactPerson' id='lastcontactPerson'>
        <textarea name='lastcontactDate' id='lastcontactDate'></textarea>
        
        <input type='submit' value='Add client'>
    </form>
        "
        
        
        
        
        ?>



</body>
</html>