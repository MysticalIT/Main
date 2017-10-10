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
    <title>Finance - Main</title>
</head>
<body>

<header>
    <div class="links">
        <div class="wrapper">
            <ul class="mainNav">

                <a href="/finance?showHelp=true">Help</a>
                <li><a href="/logout">Logout</a></li>
            </ul>
        </div>
    </div>
</header>

<div class="main-content">


    <div class="client-list">
        <ul>
            @foreach ($clients as $client)
                <li><a href="/finance?clientId={{$client->id}}">{{$client->firstname}} {{$client->lastname}}</a></li>
            @endforeach

        </ul>
        @if(isset($_GET["clientId"]))
            <ul>
                <li><a href="/finance/{{$client->id}}/inactive">Set inactive</a></li>

            </ul>

        @endif
    </div>
    <ul>
        <li><a href="/bkrCheck">BKR Check</a></li>
        <li><a href="/invoices">Invoices</a></li>
        <li><a href="/memo">Memo's</a></li>
    </ul>

</div>

@if(session()->has("message"))
    @php($msg = session()->get("message"))
    <script> window.alert('{{$msg}}'); </script>
    @php(session()->remove("message"))
@endif
</body>
</html>