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
            <ul class="mainNav">
                <li><a href="/sales">Back</a></li>
                <li><a href="/contact?showHelp=true">Help</a></li>

            </ul>

        </div>
    </div>
</header>

<container class="main-content">
    @if(isset($_GET["clientId"]))
        <table class="table table-striped">
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
    @endif

    <ul>
    @if(isset($_GET["showClients"]))
        <li><a href="/contact">Hide Clients</a></li>
    @else
        <li><a href="/contact?showClients=true">Show Clients</a></li>
    @endif
    </ul>

        
    @if(isset($_GET["showClients"]))
        <div class='client-list-contact'>
            <ul>
                @php($showclient = $_GET["showClients"])
                @if ($showclient)
                    @foreach ($clients as $client)
                        <li><a href='/contact?clientId={{$client->id}}'>{{$client->firstname}} {{$client->lastname}}</a></li>
                    @endforeach
                @endif
            </ul>
        </div>
    @endif
    @if (isset($_GET["clientId"]))
        <ul>
            @php($projectsById = $projects->where("client_id", "=", $_GET["clientId"]))
            <li><a href='/project/create?clientId={{$_GET["clientId"]}}'>Add Project</a></li>
            @foreach ($projectsById as $project)
                <li><a href='/project/{{$project->id}}/edit'>Edit: {{$projectsById->name}}</a></li>
            @endforeach
        </ul>
    @endif

</container>
</body>
</html>