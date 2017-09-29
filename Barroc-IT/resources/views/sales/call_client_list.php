<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
    <title>Sales_call_client</title>
</head>
<body>
<header>
    <div class="links">
        <div class="wrapper">
            <ul class="headerButtons">
                <a href="../../app/sales/edit_client.php?showClients=true">View clients</a>
                <a href="../../public/sales/salesMain.php">Back</a>
                <li><a href="">Logout</a></li>
            </ul>
        </div>
    </div>

</header>

<container class="main-content">

    <div class="client-list">
<?php

$clients;

if ($_GET['showclients=true'])
{
    foreach ($clients as $client)
    {
        echo"<li>$client</li> ";
    }
}
echo "<p>$details_client</p>"
?></div>

<a href="../../app/sales/edit_client.php?clientid=$id">Edit client</a>
<a href="../../app/sales/edit_project.php"></a>


</container>
</body>
</html>