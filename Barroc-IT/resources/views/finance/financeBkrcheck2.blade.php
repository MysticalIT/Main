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
            <a href="/bkrcheck?showClients=true">Get clients that needs the check</a>
            <div class="list">
                <ul>
                    @if(isset($_GET["showClients"]))
                        @php($showclient = $_GET["showClients"])
                        @if($showclient)
                            @php($users = DB::table('tbl_clients')->where("bkrchecked", false)->get())
                            @foreach($users as $user)
                                <li><a href='/bkrcheck?clientId={{$user->id}}'>{{$user->firstname}} {{$user->lastname}}</a></li>
                            @endforeach
                        @endif
                    @endif
                </ul>
            </div>
        </div>
    </div>



    <div class="detailsFinance">
        <div class="wrapper">
            <div class="clientDetailsFinance">
                <table class="table table-striped">
                    @if(isset($_GET["clientId"]))
                        @php($clientId = $_GET["clientId"])
                        @php($users = DB::table('tbl_clients')->where("id", $clientId)->get())
                        @foreach($users as $user)
                            <tr>
                                <th>Name:</th>
                                <td>{{$user->firstname}} {{$user->lastname}}</td>
                            </tr>
                            <tr>
                                <th>Phone-number:</th>
                                <td>{{$user->phonenumber}}</td>
                            </tr>
                            <tr>
                                <th>Company name:</th>
                                <td>{{$user->company_name}}</td>
                            </tr>
                            <tr>
                                <th>Street:</th>
                                <td>{{$user->street}}</td>
                            </tr>
                            <tr>
                                <th>City:</th>
                                <td>{{$user->city}}</td>
                            </tr>
                            <tr>
                                <th>Zip-code:</th>
                                <td>{{$user->zip_code}}</td>
                            </tr>
                        @endforeach
                    @endif
                </table>
            </div>
            <div class="bkrCheck">
                @if(isset($clientId))
                    <form action='' method='post'>
                        {{csrf_field()}}
                        <label for='bkr-checked'>BKR Checked?</label>
                        <input type='checkbox' name='checked' id='bkr-checked'>
                        <label for='bkr-approved'>BKR Approved?</label>
                        <input type='checkbox' name='approved' id='bkr-approved'>
                        <input type='submit' value='Send/Done'>
                    </form>
                    @php(session(["clientId" => $clientId]))
                @endif
            </div>
        </div>
    </div>
</div>
</body>
</html>