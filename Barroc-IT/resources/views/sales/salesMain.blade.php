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
            <ul class="mainNav">
                <a href="/logout">Logout</a>
               <li> <a href="/sales?showHelp=true">Help</a></li>

            </ul>

        </div>
    </div>
</header>
    <container class="main-content">
        <div class="sales-nav">
            <ul>
                @php($department = "sales")
                @if (isset($_GET["clientId"]))

                    @php(session(["clientId" => $_GET["clientId"]]))
                    @php($clientid = $_GET["clientId"])
                    <li><a href='/clients/create'>Add Client</a></li>
                    <li><a href="/contact">Clients to Contact</a></li>
                    <li><a href="/memo/{{$department}}">Show memos</a></li>
                    <div class="spacer"></div>
                    <li><a href='/clients/{{$clientid}}/edit'>Edit {{$clients->find($clientid)->firstname}} {{$clients->find($clientid)->lastname}}'s info</a></li>
                @else
                    @if(session()->has("clientId"))
                        @php(session()->remove("clientId"))
                    @endif

                    <li><a href='/clients/create'>Add Client</a></li>
                    <li><a href="/contact">Clients to Contact</a></li>
                    <li><a href="/memo/{{$department}}">Show memos</a></li>
                @endif
            </ul>


        </div>


</container>
@if(isset($_GET["showclients"]))
    @php($showclient = $_GET["showclients"])
    @if ($showclient === "true")
        <div class="showHideClients">
            <ul>
                <li><a href="/sales">Hide Clients</a></li>
            </ul>
        </div>
        <div class='client-list'>

            <ul>
                @foreach ($clients as $client)
                    <li><a href='/sales?clientId={{$client->id}}'>{{$client->firstname}} {{$client->lastname}}</a></li>
                @endforeach
            </ul>
        </div>
    @endif
@else
    <div class="showHideClients">
        <ul>
            <li><a href="/sales?showclients=true">Show Clients</a></li>
        </ul>
    </div>
@endif

@if(session()->has("message"))
    @php($msg = session()->get("message"))
    <script> window.alert('{{$msg}}'); </script>
    @php(session()->remove("message"))
@endif
</body>
</html>