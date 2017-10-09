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
    <title>Add client</title>
</head>
<body>


<header>
    <div class="links">
        <div class="wrapper">
            <ul class="mainNav">
                <li><a href="/sales">Back</a></li>
                <li><a href="/add?showHelp=true">Help</a></li>

            </ul>

        </div>
    </div>
</header>

<div class="main-content">
    <div class="container-fluid">
        <h4>Add Client</h4>
            <form method="post" action="/clients/create" class="add-client">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="companyName">Client company name:</label>
                    <input type="text" name="companyName" id="companyName">
                </div>

                <div class="form-group">
                    <label for="street">Client street:</label>
                    <input type="text" name="street" id="street">
                </div>

                <div class="form-group">
                    <label for="house-number">Client house number:</label>
                    <input type="text" name="house_number" id="house-number">
                </div>

                <div class="form-group">
                    <label for="city">Client city:</label>
                    <input type="text" name="city" id="city">
                </div>

                <div class="form-group">
                    <label for="zip-code">Client zip-code</label>
                    <input type="text" name="zip_code" id="zip-code">
                </div>

                <div class="form-group">
                    <label for="clientFirstName">Client first name</label>
                    <input type="text" name="clientFirstName" id="clientFirstName">
                </div>

                <div class="form-group">
                    <label for="clientLastName">Client last name</label>
                    <input type="text" name="clientLastName" id="clientLastName">
                </div>

                <div class="form-group">
                    <label for="phoneNumber">Client phone number</label>
                    <input type="text" name="phoneNumber" id="phoneNumber">
                </div>

                <div class="form-group">
                    <label for="email">Client email:</label>
                    <input type="text" name="email" id="email">
                </div>

                <div class="form-group help-btn">
                    <input type="submit" class="btn-primary" value="Add client">
                </div>

            </form>

    </div>
</div>


</body>
</html>