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
    <div class="page-title logo">
        <h1 class="text_main text-center">Finance - BKRCheck</h1>
    </div>
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
    @if(!isset($_GET["clientId"]))
    <div class="clientsFinance">
        <div class="wrapper">
           <div class="client-list">

               <ul class="unset-mp text-center client-list-ul ">
                   <input type="text" id="myInput" onkeyup="search()" placeholder="Search for projects.." title="Type in a name">
                   @foreach($clients as $client)
                       @if($client->active)
                       @if(!$client->bkrchecked || !$client->bkrapproved)
                       <li><a href="/bkrCheck?clientId={{$client->id}}">{{$client->firstname}} {{$client->lastname}}</a></li>
                       @endif
                       @endif
                           @endforeach
               </ul>
           </div>
        </div>
    </div>
@endif


    <div class="detailsFinance">
        <div class="wrapper">
            <div class="clientDetailsFinance">
                <table class="table">
                    @if(isset($_GET["clientId"]))
                        @php
                        $clientId = $_GET["clientId"];
                        $client = $clients->where("id", $clientId)->first();

                        @endphp
                            <tr>
                                <th>Name:</th>
                                <td>{{$client->firstname}} {{$client->lastname}}</td>
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
</body>
</html>