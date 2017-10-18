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
    <title>Finance - Invoices</title>
</head>
<body>
<div class="page-title logo">
    <h1 class="text_main text-center">Finance - Invoices</h1>
</div>
<header>
    <div class="links">
        <div class="wrapper">
            <ul class="mainNav">
                <li><a href="/finance">Back</a></li>
                <li><a href="/invoices?showHelp=true">Help</a></li>
            </ul>
        </div>
    </div>

</header>
<div class="container">
    <div class="clientsFinance col-md-4">
        <div class="wrapper">
            <div class="uni-nav">
                <ul class="uni-nav-clients">
                    <li class="text-center"><a href="/invoices?showProjects=true">Show all projects</a></li>
                    @if(isset($_GET["projectId"]))
                        <div class="spacer"></div>
                        <li class="text-center"><a href="/invoices/{{$_GET["projectId"]}}/create">Create invoice</a></li>
                    @endif
                </ul>
            </div>
            @if(isset($_GET["showProjects"]))
                <div class="client-list">
                    <ul class="client-list-ul unset-mp text-center">
                        @foreach($projects as $project)
                            @if(!$project->finished)
                                <li class="text-center"><a href="/invoices?projectId={{$project->id}}">{{$project->name}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
    @if(isset($_GET["projectId"]))
        <div class="invoices">
            <div class="wrapper">
                <h3 class="text-center bold">Invoices for: {{$projects->where("id", "=", $_GET["projectId"])->first()->name}}</h3>
                @php($projectInvoices = $invoices->where("project_id", "=", $_GET["projectId"]))
                @if(count($projectInvoices) > 0)
                    <h5 class="text-center bold">Open Invoices:</h5>
                    <table class="table">
                        <tr>
                            <th>Open Invoice Subject:</th>
                            <th>Open Invoice Charge:</th>
                            <th>Open Invoice Paid:</th>
                        </tr>
                        @foreach($projectInvoices as $projectInvoice)
                            @if($projectInvoice->paid == false)
                                <tr>
                                    <td>{{$projectInvoice->subject}}</td>
                                    @php($charge = str_replace(".", ",", $projectInvoice->price))
                                    <td>&euro; {{$charge}}</td>
                                    <td class="text-center"><a href="/invoices/{{$projectInvoice->id}}/paid">PAID</a></td>
                                </tr>
                            @else
                                @php($paid = true)
                            @endif
                        @endforeach
                    </table>
                    @if($paid)
                        <div class="spacer"></div>
                        <h5 class="text-center bold">Paid Invoices:</h5>
                        <table class="table">
                            <tr>
                                <th>Paid Invoice Subject:</th>
                                <th>Paid Invoice Charge:</th>
                            </tr>
                            @foreach($projectInvoices as $projectInvoice)
                                @if($projectInvoice->paid == true)
                                    <tr>
                                        <td>{{$projectInvoice->subject}}</td>
                                        @php($charge = str_replace(".", ",", $projectInvoice->price))
                                        <td>&euro; {{$charge}}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </table>
                    @endif
                @endif
            </div>
        </div>
    @endif
</div>
</body>
</html>