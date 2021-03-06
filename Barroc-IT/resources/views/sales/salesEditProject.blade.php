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
    <title>Edit Project</title>
</head>
<body>
<header>
    <div class="page-title logo">
        <h1 class="text_main text-center">Sales - Edit Project</h1>
    </div>
    <div class="links">
        <div class="wrapper">
            <ul class="mainNav">
                <li title="Go back // Ga terug"><a href="/sales">Back</a></li>
                <li title="Help // Help"><a href="/add?showHelp=true">Help</a></li>

            </ul>

        </div>
    </div>
</header>

<div class="main-content">
    <div class="container-fluid">
        <form action="/projects/{{$project->id}}" method="post" class="add-client">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="form-group">
                <label for="projectName">Project name</label>
                <input type="text" name="projectName" id="projectName" value="{{$project->name}}">
            </div>

            <div class="form-group">
                <label for="projectDetails">Project details</label>
                <textarea name="projectDetails" id="projectDetails">{{$project->description}}</textarea>
            </div>

            <div class="form-group">
                <label for="setInvoice">Set invoice limit</label>
                <input type="text" name="limit" id="setInvoice" value="{{$project->limit}}">
            </div>

            <div class="form-group">
                <input type="submit" class="btn-primary" value="Edit Project">
            </div>

        </form>
    </div>
</div>
@if(isset($_GET["showHelp"]))
    @php($msg = "Hover over the button for information!")
    <script> window.alert('{{$msg}}'); </script>
@endif
</body>
</html>