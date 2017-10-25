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
    <title>Development - Project</title>
</head>
<body>
<header>
    <div class="page-title logo">
        <h1 class="text_main text-center">Development - Project</h1>
    </div>
    <div class="links">
        <div class="wrapper">
            <ul class="mainNav">
                <li><a href="/development">Back</a></li>
                <li><a href="/development/project?showhelp=true">Help</a></li>
            </ul>
        </div>
    </div>
</header>
<div class="container">
    <div class="wrapper">
	@if($project->finished)
		<h2 class="text-success bold text-center">Project Finished</h2>
	@endif
        <table class="table">
            <tr>
                <th>Client name:</th>
                <th>Project:</th>
                <th>Details:</th>
            </tr>
            <tr>
                <td>{{$client->firstname}} {{$client->lastname}}</td>
                <td>{{$project->name}}</td>
                <td>{{$project->description}}</td>
            </tr>
        </table>
    </div>
    <div class="">
        <div class="">
            @if(!$project->started)
                <a href="/development/{{$project->id}}/start">Start project</a>
            @elseif(!$project->finished)
                <a href="/development/{{$project->id}}/finish">Finish project</a>
            @endif
        </div>
    </div>
</div>
@if(session()->has("message"))
    @php($msg = session()->get("message"))
    <script> window.alert('{{$msg}}'); </script>
    @php(session()->remove("message"))
@endif
</body>
</html>