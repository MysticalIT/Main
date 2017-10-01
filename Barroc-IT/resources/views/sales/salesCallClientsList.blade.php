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
    <title>Call client</title>
</head>
<body>
<header>
    <div class="links">
        <div class="wrapper">
            <ul class="headerButtons">
                <a href="/callclient?showClients=true">View clients</a>
                <a href="/sales">Back</a>

            </ul>
        </div>
    </div>

</header>

<container class="main-content">

    <div class="client-list">
<?php
        error_reporting(0);
        $showclient = $_GET["showClients"];
        if ($showclient)
            {
                echo "<a href='/callclient?clientId=$clientid'>BALLZ :3</a>";
            }
        ?>

</div>

<a href="/editproject?projectId=$projectid">Edit project</a> <!-- moet in if statement (PHP) dus idk je kan stylen -->


</container>
</body>
</html>