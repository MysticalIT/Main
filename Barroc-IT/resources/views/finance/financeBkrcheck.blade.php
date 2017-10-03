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
                    <li><a href="">George</a></li>
                    <li><a href="">Fleur</a></li>
                    <li><a href="">Ben does not exist</a></li>
                </ul>
            </div>
        </div>
    </div>



    <div class="detailsFinance">
        <div class="wrapper">
            <div class="clientDetailsFinance">

                <table style="width:100%">
                    <tr>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Street</th>
                        <th>City</th>
                        <th>Zip-Code</th>
                    </tr>
                    <tr>
                        <td>TK-1140</td>
                        <td>06-2281723</td>
                        <td>607th bunks</td>
                        <td>Death Star</td>
                        <td>1828-DS</td>
                    </tr>
                    <tr>
                        <td>Darth Vader</td>
                        <td>92-1283-491</td>
                        <td>Meditation sphere</td>
                        <td>Death Star</td>
                        <td>1929-DS</td>
                    </tr>
                </table>
            </div>
            <div class="bkrCheck">
                <form action="" method="post">
                    <label for="bkr-checked">BKR Checked?</label>
                    <input type="checkbox" name="checked" id="bkr-checked">
                    <label for="bkr-approved">BKR Approved?</label>
                    <input type="checkbox" name="approved" id="bkr-approved">
                    <input type="submit" value="Send/Done">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>