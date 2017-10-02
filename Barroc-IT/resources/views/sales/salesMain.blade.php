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
    <title>Sales Homepage</title>
</head>
<body>
<header>
    <div class="links">
        <div class="wrapper">
            <ul class="headerButtons">
               <li><a href="salesMain.blade.php?showHelp=true">Help</a></li>
                <a href="/logout">Logout</a>
            </ul>
            <a href="/sales?showHelp=true">Help</a>
        </div>
    </div>
</header>

    <container class="main-content">



    <div class="sales-nav">
    <ul>

    </ul>
    <ul>
        <li><a href="/addclient">Add Client here</a></li>
        <li><a href="/callclient">Call list for clients</a></li>
        <li><a href="/addproject">Add Project</a></li>
        <li><a href="/memo">Show sales memos</a></li>
        <li><a href="?showclients=true">Show Clients</a></li>

    </ul>
    </div>
</container>

<?php
error_reporting(0);
$showclient = $_GET["showclients"];

if ($showclient)
    echo "<div class='client-list'>";
echo"<ul>";

    echo"<li><a href='?clientId=$clientid'>Client</a></li>";
    echo"<li><a href='?clientId=$clientid'>Client</a></li>";
    echo"<li><a href='?clientId=$clientid'>Client</a></li>";
    echo"<li><a href='?clientId=$clientid'>Client</a></li>";
    echo"<li><a href='?clientId=$clientid'>Client</a></li>";
    echo"<li><a href='?clientId=$clientid'>Client</a></li>";
    echo"<li><a href='?clientId=$clientid'>Client</a></li>";


echo"</ul>";
echo"</div>";
?>



</body>
</html>