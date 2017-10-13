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
    <title>Development - Projects</title>
</head>
<body>



<div class="container">
    <header>


        <div class='client-list'>
            <ul class="client-list-ul unset-mp text-center">
                    <li></li>
                    <li><a href="/development">Back</a></li>
                    <li><a href="/development/project?showhelp=true">Help</a></li>
                </ul>
            </nav>
        </div>
    </header>



@php

        @endphp

    <div class="listProjects">
        <div class="wrapper">
            <div class="projectList">
                <table>
                    <tr>
                        <th>Project:</th>
                        <th>Client name:</th>
                        <th>Description:</th>
                    </tr>

                    <tr>
                        <th>{{$project->name}}</th>
                        <th>{{$client->firstname}} {{$client->lastname}}</th>
                        <th>{{$project->description}}</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="">
        <div class="">
            <a href="/development/{{$project->id}}/start">Start project</a>
            @if($project->started)
                <a href="/development/{{$project->id}}/finish">Finish project</a>
            @endif
        </div>
    </div>
</div>
</body>
</html>