<?php
/**
 * Created by PhpStorm.
 * User: Cyri
 * Date: 18/09/2017
 * Time: 09:53
 */?>

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
    <title>Barroc-IT</title>
</head>
<body>

<div class="header">
    <div class="container">
        <div class="logo">
            <h1>Barroc IT</h1>
        </div>
    </div>
</div>

<div class="main-content">

    <div class="container-fluid">

        <form class="login-form col-md-5 offset-md-1 text-md-center" action="" method="post">
            {{csrf_field()}}
            <h4>Please enter your credentials</h4>

            <div class="form-group">
                <label for="department" class="col-md-3">Department</label>
                <input type="text" class="col-md-3" name="department" id="department">
            </div>

            <div class="form-group">
                <label for="password" class="col-md-3">Password</label>
                <input type="password" class="col-md-3" name="password" id="password">
            </div>

            <div class="btn-help">
                <input type="button" name="help" value="Help" class="help-button">
            </div>

            <div class="form-group">
                <input type="submit" name="type" value="Login" class="login-button">
            </div>
        </form>
    </div>

</div>


<?php
if(session()->has("message")){
    $msg = session()->get("message");
    echo "<script> window.alert('$msg'); </script>";
    session()->flash("message");
}
?>
</body>
</html>
