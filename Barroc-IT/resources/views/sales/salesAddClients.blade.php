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
@if(isset($_GET["showHelp"]) && $_GET["showHelp"] == true)
    @php($help = true)
@else
    @php($help = false)
@endif

<header>
    <div class="page-title logo">
        <h1 class="text_main text-center">Sales - Add Client</h1>
    </div>
    <div class="links">
        <div class="wrapper">
            <ul class="mainNav">
                <li><a href="/sales">Back</a></li>
                <li><a href="/clients/create?showHelp=true">Help</a></li>

            </ul>

        </div>
    </div>
</header>

<div class="main-content">
    <div class="container-fluid">
            <form method="post" action="../clients" class="add-client">
                {{csrf_field()}}
                <div class="form-group form-group-add">
                    <label for="companyName">Client company name:</label>
                    <input type="text" name="companyName" id="companyName" @if($help) placeholder="Barroc-IT" @endif>
                </div>

                <div class="form-group form-group-add">
                    <label for="street">Client street:</label>
                    <input type="text" name="street" id="street" @if($help) placeholder="Jefferson's Street" @endif>
                </div>

                <div class="form-group form-group-add">
                    <label for="house-number">Client house number:</label>
                    <input type="text" name="house_number" id="house-number" @if($help) placeholder="8A" @endif>
                </div>

                <div class="form-group form-group-add">
                    <label for="city">Client city:</label>
                    <input type="text" name="city" id="city" @if($help) placeholder="Amsterdam" @endif>
                </div>

                <div class="form-group form-group-add">
                    <label for="zip-code">Client zip-code:</label>
                    <input type="text" name="zip_code" id="zip-code" @if($help) placeholder="4433PA" @endif>
                </div>

                <div class="form-group form-group-add">
                    <label for="clientFirstName">Client first name:</label>
                    <input type="text" name="clientFirstName" id="clientFirstName" @if($help) placeholder="Jonas" @endif>
                </div>

                <div class="form-group form-group-add">
                    <label for="clientLastName">Client last name:</label>
                    <input type="text" name="clientLastName" id="clientLastName" @if($help) placeholder="Quinn" @endif>
                </div>

                <div class="form-group form-group-add">
                    <label for="phoneNumber">Client phone number:</label>
                    <input type="text" name="phoneNumber" id="phoneNumber" @if($help) placeholder="0655225522" @endif>
                </div>

                <div class="form-group form-group-add">
                    <label for="email">Client email:</label>
                    <input type="text" name="email" id="email" @if($help) placeholder="JonasQuinn@gmail.com" @endif>
                </div>

                <div class="form-group help-btn form-group-add">
                    <input type="submit" class="btn-primary" value="Add client">
                </div>

            </form>

    </div>
</div>


</body>
</html>