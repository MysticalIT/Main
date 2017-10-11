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
<header>
    <div class="page-title">
        <h1>Sales - Add Project</h1>
    </div>
    <div class="links">
        <div class="wrapper">
            <ul class="mainNav">
                <li><a href="/sales">Back</a></li>
                <li><a href="/add?showHelp=true">Help</a></li>

            </ul>

        </div>
    </div>
</header>
<div class="main-content">
    <div class="container-fluid">
        <form action="../projects" method="post" class="add-client">

        {{csrf_field()}}
            <div class="form-group">
                <input type="hidden" name="id" value="{{$_GET["clientId"]}}">
            </div>

            <div class="form-group">
                <label for="projectName">Project name</label>
                <input type="text" id="projectName" name="projectName">
            </div>

            <div class="form-group pr-details">
                <label for="projectDetails">Project details</label>
                <textarea id="projectDetails" name="projectDetails"></textarea>
            </div>

            <div class="form-group">
                <label for="setInvoice">Set invoice limit</label>
                <input type="text" id="setInvoice" name="setInvoice">
            </div>


            <div class="form-group">
                <input type="submit" class="btn-primary" value="add project">
            </div>

        </form>
    </div>
</div>
</body>
</html>