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
<div class="header">
    <div class="container">
        <div class="logo">
            <h1>Barroc IT</h1>
        </div>
    </div>
</div>



<div class="main-content">
    <ol class="mainNav">
    <li class="adminClients">
        <a href="/activateClients">Activate Clients</a>
        <a href='/faker'> pattt </a>;

        </li>

    <li class="adminMemos">
        <a href="/memo">Memo's</a>
    </li>

    <li class="logout-btn">
        <a href="/logout">Logout</a>
    </li>
    </ol>
</div>
</body>
</html>
