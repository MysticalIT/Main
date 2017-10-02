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
    <title>Add project</title>
</head>
<body>
<?php

        ?>
<form action="" method="post">

    <label for="clientname">Client name</label>
    <input type="text" id="clientname">

    <label for="clientphonenumber">Client phonenumber</label>
    <input type="text" id="clientphonenumber">

    <label for="projectname">Project name</label>
    <input type="text" id="projectname">

    <label for="projectDetails">Project details</label>
    <textarea id="projectDetails"></textarea>

    <label>Set invoice limit</label>
    <input type="text" id="setinvoice">


</form>


</body>
</html>