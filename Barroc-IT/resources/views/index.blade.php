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
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="{{ asset("css/main.css") }}">
    <title>Barroc-IT</title>
</head>
<body>

<div class="header">
    <div class="container">
        <div class="logo">
            <h1 class="text_main text-center">BARROC IT.</h1>
        </div>
    </div>
</div>

<div class="main-content">

    <div class="container-fluid">

        <form class="login-form col-md-4 col-md-offset-4" action="/login" method="post">
            {{csrf_field()}}
            <h4>Please enter your credentials</h4>

            <div class="form-group">
                <label for="department" class="form-control col-md-3">Department</label>
                <input type="text" class="form-control  col-md-3" name="department" id="department">
            </div>

            <div class="form-group login-password">
                <label for="password" class="form-control  col-md-3">Password</label>
                <input type="password" class="form-control  col-md-3" name="password" id="password">
            </div>

           <!-- <div class="form-group help-btn">
                <input type="submit" name="help" value="Help" class="help-btn btn btn-primary">
            </div>-->

            <div class="form-group help-btn">
                <div class="login-btn">
                    <input type="submit" name="type" value="Login" class="btn btn-primary">
                </div>
                <div class="help-btn ltr">
                    <a href="/index?showhelp=true">Help</a>
                </div>
            </div>



        </form>


    </div>

</div>


<?php
if(session()->has("message")){
    $msg = session()->get("message");
    echo "<script> window.alert('$msg'); </script>";
    session()->remove("message");
}
?>
</body>
</html>
