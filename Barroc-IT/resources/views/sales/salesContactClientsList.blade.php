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
    <div class="page-title logo">
        <h1 class="text_main text-center">Sales - Contact Clients</h1>
    </div>
    <div class="links">
        <div class="wrapper">
            <ul class="mainNav">
                <li title="Go back // Ga terug"><a href="/sales">Back</a></li>
                <li><a href="/contact?showHelp=true">Help</a></li>

            </ul>

        </div>
    </div>
</header>

<div class="main-content">
    <div class="wrapper">
        <div class="spacer"></div>
        <div class="uni-nav">
            <ul class="text-center unset-mp uni-nav-clients">
                @if(isset($_GET["showClients"]))
                    <li title="Hide all clients // Verberg alle klanten"><a href="/contact">Hide Clients to Contact</a></li>
                @else
                    <li title="Show all clients // Laat alle klanten zien"><a href="/contact?showClients=true">Show Clients to Contact</a></li>
                @endif
            </ul>
        </div>
        <div class="spacer"></div>





        @if(isset($_GET["clientId"]))
            <div class="tableflex">
                <table class="table table-contact">
                    @php
                        $clientId = $_GET["clientId"];
                        $users = $clients->where("id", "=", $clientId);
                    @endphp
                    @foreach ($users as $user)
                        <tr>
                            <th>Name:</th>
                            <td>{{$user->firstname}} {{$user->lastname}}</td>
                        </tr>
                        <tr>
                            <th>Phone-number:</th>
                            <td>{{$user->phonenumber}}</td>
                        </tr>
                        <tr>
                            <th>Company name:</th>
                            <td>{{$user->company_name}}</td>
                        </tr>
                        <tr>
                            <th>Street:</th>
                            <td>{{$user->street}}</td>
                        </tr>
                        <tr>
                            <th>City:</th>
                            <td>{{$user->city}}</td>
                        </tr>
                        <tr>
                            <th>Zip-code:</th>
                            <td>{{$user->zip_code}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        @endif

        @if(isset($_GET["showClients"]))
            <div class='client-list'>
                <ul id="myUL" class="client-list-ul unset-mp text-center">
                    @php($showclient = $_GET["showClients"])
                    @if ($showclient)
                        <input type="text" id="myInput" onkeyup="search()" placeholder="Search for names.." title="Type in a name">

                    @foreach ($clients as $client)
                            @if($client->active)
                                <li title="This clients name is: {{$client->firstname}} // Deze klants naam is: {{$client->firstname}}"><a href='/contact?clientId={{$client->id}}'>{{$client->firstname}} {{$client->lastname}}</a></li>
                            @endif
                        @endforeach
                    @endif
                </ul>
            </div>
        @endif
        @if (isset($_GET["clientId"]))
            <div class="spacer"></div>
            <div class="listprojects">
                <h3 class="bold">Projects:</h3>
                <ul class="unset-mp">
                    @php($projectsById = $projects->where("client_id", "=", $_GET["clientId"]))
                    <li title="Add a project // Voeg een project toe"><a href='/projects/create?clientId={{$_GET["clientId"]}}'>Add Project</a></li>
                    @foreach ($projectsById as $project)
                        @if(!$project->finished)

                            <li title="Edit project // Wijzig project"><a href='/projects/{{$project->id}}/edit'>Edit: {{$project->name}}</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
@if(isset($_GET["showHelp"]))
    @php($msg = "Hover over the button for information!")
    <script> window.alert('{{$msg}}'); </script>
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