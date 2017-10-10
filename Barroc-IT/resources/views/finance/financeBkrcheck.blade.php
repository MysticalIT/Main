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
    <title>Finance - BKR Check</title>
</head>
<body>


<header>

    <div class="links">
        <div class="wrapper">
            <ul class="mainNav">
                <li><a href="/finance">Back</a></li>
                <li><a href="">Help</a></li>
            </ul>
        </div>
    </div>
</header>


<div class="container">
    <div class="clientsFinance">
        <div class="wrapper">
           <div class="list">
               <ul>
                   @foreach($clients as $client)
                       <li><a href="/financeBkrcheck?clientId={{$client->id}}">{{$client->firstname}} {{$client->lastname}}</a></li>
                       @endforeach
               </ul>
           </div>
        </div>
    </div>



    <div class="detailsFinance">
        <div class="wrapper">
            <div class="clientDetailsFinance">
                <table class="table table-striped">
                    @if(isset($_GET["clientId"]))
                        @php($client = $clients->all()->where("id", "=", $_GET["clientId"]))
                            <tr>
                                <th>Name:</th>
                                <td>{{$client->firstname->where("id", "=", "$client->id")}} {{$client->lastname}}</td>
                            </tr>
                            <tr>
                                <th>Phone-number:</th>
                                <td>{{$client->phonenumber}}</td>
                            </tr>
                            <tr>
                                <th>Company name:</th>
                                <td>{{$client->company_name}}</td>
                            </tr>
                            <tr>
                                <th>Street:</th>
                                <td>{{$client->street}}</td>
                            </tr>
                            <tr>
                                <th>City:</th>
                                <td>{{$client->city}}</td>
                            </tr>
                            <tr>
                                <th>Zip-code:</th>
                                <td>{{$client->zip_code}}</td>
                            </tr>
                    @endif
                </table>
            </div>
            <div class="bkrCheck">
                @if(isset($_GET["clientId"]))
                    <form action='' method='post'>
                        {{csrf_field()}}
                        <label for='bkr-checked'>BKR Checked?</label>
                        <input type='checkbox' name='checked' id='bkr-checked'>
                        <label for='bkr-approved'>BKR Approved?</label>
                        <input type='checkbox' name='approved' id='bkr-approved'>
                        <input type='submit' value='Send/Done'>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>

</body>
</html>