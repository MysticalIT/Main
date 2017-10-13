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
    <div class="page-title logo">
        <h1 class="text_main text-center">Finance - Home</h1>
    </div>
    <div class="links">
        <div class="wrapper">
            <ul class="mainNav">
                <li><a href="/finance?showHelp=true">Help</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
        </div>
    </div>
</header>

<div class="main-content">
    <div class="uni-nav">
        <ul class="uni-nav-clients">
            <li><a href="/bkrCheck">BKR Check</a></li>
            <li><a href="/invoices">Invoices</a></li>
            <li><a href="/memo">Memo's</a></li>
            @if(isset($_GET["showclients"]))
                <li><a href="/finance">Hide Clients</a></li>
            @else
                <li><a href="/finance?showclients=true">Show Clients to set inactive</a></li>
            @endif
            @if(isset($_GET["clientId"]))
                <div class="spacer"></div>
                @php($client = $clients->where("id", "=", $_GET["clientId"])->first())
                <li><a href="/finance/{{$client->id}}/inactive">Set {{$client->firstname}} {{$client->lastname}} inactive</a></li>
            @endif
        </ul>
    </div>
    @if(isset($_GET["showclients"]))
    <div class="client-list">
        <ul class="unset-mp text-center client-list-ul">
            @foreach ($clients as $client)
                <li><a href="/finance?clientId={{$client->id}}">{{$client->firstname}} {{$client->lastname}}</a></li>
            @endforeach
        </ul>
    </div>
    @endif


</div>

@if(session()->has("message"))
    @php($msg = session()->get("message"))
    <script> window.alert('{{$msg}}'); </script>
    @php(session()->remove("message"))
@endif
</body>
</html>