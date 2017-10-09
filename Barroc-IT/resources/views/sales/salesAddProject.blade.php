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
    <title>Add project</title>
</head>
<body>
<div class="links">
    <a href="/sales">Back</a>
</div>

@foreach($projectName as $item)
        <a href="project/{{$item->id}}/edit">{{$item->name}}</a>

@endforeach


<form action="/projects/create" method="post">

{{csrf_field()}}
    <label for="projectName">Project name</label>
    <input type="text" id="projectName" name="projectName">

    <label for="projectDetails">Project details</label>
    <textarea id="projectDetails" name="projectDetails"></textarea>

    <label for="setInvoice">Set invoice limit</label>
    <input type="text" id="setInvoice" name="setInvoice">

    <input type="submit" class="btn-primary" value="add project">


</form>


</body>
</html>