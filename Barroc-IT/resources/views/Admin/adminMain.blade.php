<?php
/**
 * Created by PhpStorm.
 * User: Cyri
 * Date: 25-9-2017
 * Time: 09:50
 */?>

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
    <title>Admin Main</title>
</head>
<body>
<header>
    <div class="page-title logo">
        <h1 class="text_main text-center">Admin - Home</h1>
    </div>
    <div class="links">
        <div class="wrapper">
            <ul class="mainNav">
                <li><a href="/logout">Logout</a></li>
                <li><a href="/sales?showHelp=true">Help</a></li>
            </ul>
        </div>
    </div>
</header>

<div class="main-content">
    <div class="uni-nav">
        <ul>
            <li class="adminClients">
                <a href="/activateClients">Activate Clients</a>
            </li>
        </ul>
    </div>
</div>
</body>
</html>

<?php
if(session()->has("message")){
    $msg = session()->get("message");
    echo "<script> window.alert('$msg'); </script>";
    session()->remove("message");
}
?>
