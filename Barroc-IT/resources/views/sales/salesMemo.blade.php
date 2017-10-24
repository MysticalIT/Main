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
    <title>Sales - Memo's</title>
</head>
<body>

<header>
    <div class="page-title logo">
        <h1 class="text_main text-center">Sales - Memos</h1>
    </div>
    <div class="links">
        <div class="wrapper">
            <ul class="mainNav">
                <li title="Go back // Ga terug"><a href="/sales">Back</a></li>
                <li><a href="/memo?showHelp=true">Help</a></li>
            </ul>
        </div>
    </div>
</header>

<div class="main-content">
    <div class="spacer"></div>
    <div class="wrapper">
        <div class="memo set-flex space-between">
            <div class="client-list">
                <ul id="myUL" class="client-list-ul unset-mp text-center">

                    <input type="text" id="myInput" onkeyup="search()" placeholder="Search for projects.." title="Type in a project">


                    @foreach($projects as $project)
                        @if(!$project->finished)
                             <li title="This projects name: {{$project->name}} // Dit projects naam is: {{$project->name}}"><a href='/memo?projectId={{$project->id}}'>{{$project->name}}</a></li>
                        @endif
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
                            <label title="This is where you put details in // Dit is waar u details invoert" for="memo">Memo:</label>
                            <textarea name='memo' id='memo' cols='30' rows='10'>{{$currentMemo->memo}}</textarea>
                        </div>
                        <div class="form-group submit-form-memo">
                            <input type='submit' class="btn-primary" value='Update Memo'>
                        </div>
                    </form>
                </div>
            @endif
        </div>
    </div>
</div>
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
@if(isset($_GET["showHelp"]))
    @php($msg = "Hover over the button for information!")
    <script> window.alert('{{$msg}}'); </script>
@endif
</body>
</html>