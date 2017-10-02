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
    <title>Edit Project</title>
</head>
<body>
<?php
        $clientId= $_GET["clientId"];
        $projectId= $_GET["projectId"];


        ?>

<form action="" method="post">

    <label for="clientname">Client name</label>
    <label for="clientphonenumber">Client phonenumber</label>
    <label for="projectname">Project name</label>
    <label for="projectDetails">Project details</label>
    <input type="text" id="clientname">
    <input type="text" id="clientphonenumber">
    <input type="text" id="projectname">
    <textarea id="projectDetails"></textarea>

    <a href="/createInvoice?projectId=">Set invoice limit</a>


</form>

</body>
</html>