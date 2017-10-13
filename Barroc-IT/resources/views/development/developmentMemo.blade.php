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
    <title>Development - Memo's</title>
</head>
<body>

<div class="container">
<header>
    <div class="wrapper">
        <nav class="navigation">
            <ul>
                <li></li>
                <li><a href="/development">Back</a></li>
                <li><a href="/memo?showhelp=true">Help</a></li>
            </ul>
        </nav>
    </div>
</header>

    <div class="main-content">
        <div class="wrapper">
            <div class="memo set-flex space-between">
                <div class="list-projects-memo">
                    <ul class="unset-mp">
                        @foreach($projects as $project)
                            <li><a href='/memo?projectId={{$project->id}}'>{{$project->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                @if(isset($_GET["projectId"]))
                    @php($projectId = $_GET["projectId"])
                    @php($currentMemo = $memos->where('project_id', "=", $projectId)->first())
                    <div class="editmemo">
                        <form action='/memo/{{$currentMemo->id}}' method='post'>
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group form-group-text-memo">
                                <label for="memo">Memo:</label>
                                <textarea name='memo' id='memo' cols='30' rows='10'>{{$currentMemo->memo}}</textarea>
                            </div>
                            <div class="form-group sumit-form-memo">
                                <input type='submit' class="btn-primary" value='Update Memo'>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>


</body>
</html>