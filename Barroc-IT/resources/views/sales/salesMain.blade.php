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
@if(isset($_GET["showHelp"]) && $_GET["showHelp"] == true)
    @php($help = true)
@else
    @php($help = false)
@endif
<header>
    <div class="page-title logo">
        <h1 class="text_main text-center">Sales - Home</h1>
    </div>
    <div class="links">
        <div class="wrapper">
            <ul class="mainNav">
                <li title="Logout/Uitloggen"><a href="/logout">Logout</a></li>
                <li> <a href="/sales?showHelp=true">Help</a></li>

            </ul>

        </div>
    </div>
</header>
    <div class="main-content">
        <div class="uni-nav">
            <ul class="uni-nav-clients">
                @php($department = "sales")
                @if (isset($_GET["clientId"]))

                    @php(session(["clientId" => $_GET["clientId"]]))
                    @php($clientid = $_GET["clientId"])
                    <li title="Add a client here // Voeg hier een klant toe"><a href='/clients/create'>Add Client</a></li>
                    <li title="See all clients who need to be contacted // Zie hier alle klanten die contact moeten"><a href="/contact">Clients to Contact</a></li>
                    <li title="See here all memos // Zie hier alle memos"><a href="/memo">Show memos</a></li>
                    @if(isset($_GET["showclients"]))
                        <li><a href="/sales">Hide Clients</a></li>
                    @else
                        <li><a href="/sales?showclients=true">Show Clients</a></li>
                    @endif
                    <div class="spacer"></div>
                    <li><a href='/clients/{{$clientid}}/edit'>Edit {{$clients->find($clientid)->firstname}} {{$clients->find($clientid)->lastname}}'s info</a></li>
                @else
                    @if(session()->has("clientId"))
                        @php(session()->remove("clientId"))
                    @endif
                            <li title="Add a client here // Voeg hier een klant toe"><a href='/clients/create'>Add Client</a></li>
                            <li title="See all clients who need to be contacted // Zie hier alle klanten die contact moeten"><a href="/contact">Clients to Contact</a></li>
                            <li title="See here all memos // Zie hier alle memos"><a href="/memo">Show memos</a></li>

                        @if(isset($_GET["showclients"]))
                            <li title="Hide all client // Verbergt alle klanten"><a href="/sales">Hide Clients</a></li>

                            @else
                            <li title="See active clients // Zie active klanten"><a href="/sales?showclients=true">Show Clients</a></li>
                        @endif
                @endif
            </ul>
        </div>
        @if(isset($_GET["showclients"]))
            @php($showclient = $_GET["showclients"])
            @if ($showclient === "true")

                <div class='client-list'>
                    <ul id="myUL" class="client-list-ul unset-mp text-center">
                        <input type="text" id="myInput" onkeyup="search()" placeholder="Filter names..." title="Type in a name">
                        @foreach ($clients as $client)
                            @if($client->active)
                                <li title="This is the client: {{$client->firstname}} // Dit is de klant: {{$client->firstname}}"><a href='/sales?clientId={{$client->id}}'>{{$client->firstname}} {{$client->lastname}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            @endif
        @endif


</div>

@if(isset($_GET["showHelp"]))
    @php($msg = "Hover over the button for information!")
    <script> window.alert('{{$msg}}'); </script>
@endif

@if(session()->has("message"))
    @php($msg = session()->get("message"))
    <script> window.alert('{{$msg}}'); </script>
    @php(session()->remove("message"))
@endif
<script>
    function search() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";

            }
        }
    }
</script>
</body>
</html>