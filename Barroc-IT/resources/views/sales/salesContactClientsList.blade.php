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
    <title>Call client</title>
</head>
<body>
<header>
    <div class="links">
        <div class="wrapper">
            <ul class="headerButtons">
                <a href="/contact?showClients=true">View clients</a>
                <a href="/sales">Back</a>

            </ul>
        </div>
    </div>

</header>

<container class="main-content">
        <table class="table table-striped">
            <?php
            if(isset($_GET["clientId"]))
            {
                $clientId = $_GET["clientId"];
                $users = DB::table('tbl_clients')->where("id", $clientId)->get();
                foreach ($users as $user)
                {
                    echo"

                            <tr>
                                <th>Name:</th>
                                <td>$user->firstname $user->lastname</td>
                            </tr>
                            <tr>
                                <th>Phone-number:</th>
                                <td>$user->phonenumber</td>
                            </tr>
                            <tr>
                                <th>Company name:</th>
                                <td>$user->company_name</td>
                            </tr>
                            <tr>
                                <th>Street:</th>
                                <td>$user->street</td>
                            </tr>
                            <tr>
                                <th>City:</th>
                                <td>$user->city</td>
                            </tr>
                            <tr>
                                <th>Zip-code:</th>
                                <td>$user->zip_code</td>
                            </tr>
                            ";
                }
            }
            ?>
        </table>
    <?php
    echo"<div class='client-list'>";
    error_reporting(0);
    echo "<ul>";
    $showclient = $_GET["showClients"];
    if ($showclient)
    {
        $users = DB::table('tbl_clients')->where("bkrapproved", true)->get();
        foreach ($users as $user)
        {
            $clientid = $user->id;

            echo"<li><a href='/callclient?clientId=$clientid'>$user->firstname $user->lastname</a></li>";
        }
    }
    echo "</ul>";

    echo"</div>";
    if (isset($_GET["clientId"]))
    {
        echo "<ul>";
        $projects = DB::table("tbl_projects")->where("client_id", $_GET["clientId"])->get();
        echo "<li><a href='/project/create?clientId=$clientid'>Add Project</a></li>";
        foreach ($projects as $project)
        {
            echo "<li><a href='/project/$project->id/edit'>Edit: $project->name</a></li>";


        }
        echo "</ul>";
    }
    ?>

</container>
</body>
</html>