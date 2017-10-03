<?php
    require_once ("../../../app/clientControl.php");
    if (isset($_GET["clientId"]))
    {
        session(["clientId" => $_GET["clientId"]]);
    }
    elseif(session()->has("clientId"))
    {
        session()->remove("clientId");
    }
$users = DB::table('tbl_clients')->get();
?>
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
    <title>Sales Homepage</title>
</head>
<body>
<header>
    <div class="links">
        <div class="wrapper">
            <ul class="mainNav">
               <li> <a href="/sales?showHelp=true">Help</a></li>
                <a href="/logout">Logout</a>
            </ul>

        </div>
    </div>
</header>

    <container class="main-content">



    <div class="sales-nav">
    <ul>

    </ul>
    <ul>
        <?php
        if (isset($_GET["clientId"]))
            {
                $request = $clientid;

                $clientid = $_GET["clientId"];
                echo "<li><a href='/editclient?clientId=$clientid'>Edit Client here</a></li>";

            }
        else{
            echo "<li><a href='/addclient'>Add Client here</a></li>";
        }
        ?>

        <li><a href="/callclient">Call list for clients</a></li>
        <li><a href="/memo">Show memo's</a></li>
        <li><a href="?showclients=true">Show Clients</a></li>

    </ul>
    </div>
</container>

<?php
error_reporting(0);

$showclient = $_GET["showclients"];

if ($showclient === "true")
{

    echo "<div class='client-list'>";
        echo"<ul>";
        foreach ($users as $user)
            {
                $clientid = $user->id;
                echo"<li><a href='/sales?clientId=$clientid'>$user->firstname $user->lastname</a></li>";
            }
        echo"</ul>";
    echo"</div>";

}


echo"</ul>";
echo"</div>";

if(session()->has("message")){
    $msg = session()->get("message");
    echo "<script> window.alert('$msg'); </script>";
    session()->remove("message");
}
?>



</body>
</html>