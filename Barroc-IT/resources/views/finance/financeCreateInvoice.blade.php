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
    <title>Finance - Create Invoice</title>
</head>
<body>

<header>
    <div class="links">
        <div class="wrapper">
            <ul class="mainNav">
                <li><a href="/finance">Back</a></li>
                <li><a href="/createInvoices?showHelp=true">Help</a></li>
            </ul>
        </div>
    </div>

</header>


<div class="container">

    <div class="invoiceForm">
        <div class="wrapper">
            <form action="" method="post">
                <label for="invoiceSubject">Subject:</label>
                <input type="text" id="invoiceSubject" name="subject">
                <label for="invoicePrice">Charge:</label>
                <input type="text" id="invoicePrice" name="price">
                <input type="submit" value="Create Invoice">
            </form>
        </div>
    </div>
</div>
</body>
</html>