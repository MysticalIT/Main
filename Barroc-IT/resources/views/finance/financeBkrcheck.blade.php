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
<div class="container">
    <div class="clientsFinance">
        <div class="wrapper">
            <a href="">Get clients that needs the check</a>
            <div class="list">
                <ul>
                    <li><a href="">George</a></li>
                    <li><a href="">Fleur</a></li>
                    <li><a href="">Ben</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="links">
        <div class="wrapper">
            <ul>
                <li><a href="financeMain.blade.php">Back</a></li>
                <li><a href="">Help</a></li>
            </ul>
        </div>
    </div>
    <div class="detailsFinance">
        <div class="wrapper">
            <div class="clientDetailsFinance">
                <ul>
                    <li>
                        <p>Name</p>
                    </li>
                    <li>
                        <p>Phone-number</p>
                    </li>
                    <li>
                        <p>Street</p>
                    </li>
                    <li>
                        <p>City</p>
                    </li>
                    <li>
                        <p>Zip-code</p>
                    </li>
                </ul>
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