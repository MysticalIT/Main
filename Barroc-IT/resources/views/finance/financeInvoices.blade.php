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
            <div class="spacer"></div>
            <ul>
                <li class="text-center"><a href="/invoices?showClients=true">Show all clients with a project</a></li>
            </ul>
                @if(isset($_GET["clientId"]))
                    <div class="invoice-add text-center">
                        <ul>
                            <li class="text-center"><a href="">Create invoice</a></li>
                        </ul>
                    </div>
                @elseif(isset($_GET["showClients"]))
                    <div class="list">
                        <ul>
                            @foreach($clientIdsWithProject as $clientIdWithProject)
                                @php($client = $clients->where("id", "=", "$clientIdWithProject")->first())
                                <li class="text-center"><a href="/invoices?clientId={{$client->id}}">{{$client->firstname}} {{$client->lastname}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endif
        </div>
    </div>
    @if(isset($_GET["clientId"]))
        <div class="invoices">
            <div class="wrapper">
                @php($clientInvoices = $invoices->where("client_id", "=", $_GET["clientId"]))
                @if(count($clientInvoices) > 0)
                    <h3 class="text-center bold">Open Invoices:</h3>
                    <table class="table table-striped">
                        <tr>
                            <th>Invoice Subject:</th>
                            <th>Invoice Price:</th>
                            <th>Invoice Paid:</th>
                        </tr>
                        @foreach($clientInvoices as $clientInvoice)
                            <tr>
                                <td>{{$clientInvoice->subject}}</td>
                                <td>&euro;{{$clientInvoice->price}}</td>
                                <td class="text-center"><a href="/invoices/{{$clientInvoice->id}}/paid">PAID</a></td>
                            </tr>
                        @endforeach
                    </table>
                @endif
            </div>
        </div>
    @endif
</div>
</body>
</html>