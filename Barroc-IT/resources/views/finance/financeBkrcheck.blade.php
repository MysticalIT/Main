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
    <div class="links">
        <div class="wrapper">
            <ul>
                <li><a href="/finance">Back</a></li>
                <li><a href="">Help</a></li>
            </ul>
        </div>
    </div>
    <div class="clientsFinance">
        <div class="wrapper">
            <a href="/bkrcheck?showClients=true">Get clients that needs the check</a>
            <div class="list">
                <ul>
                    <?php
                        if(isset($_GET["showClients"]))
                        {
                            $showclient = $_GET["showClients"];
                            if ($showclient)
                            {
                                $users = DB::table('tbl_clients')->where("bkrchecked", false)->get();
                                foreach ($users as $user)
                                {
                                    $clientid = $user->id;

                                    echo"<li><a href='/bkrcheck?clientId=$clientid'>$user->firstname $user->lastname</a></li>";
                                }
                            }
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>



    <div class="detailsFinance">
        <div class="wrapper">
            <div class="clientDetailsFinance">
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
            </div>
            <div class="bkrCheck">
                <?php
                if(isset($clientId))
                {
                    echo "
                    <form action='' method='post'>
                    ";
                    ?>
                    {{csrf_field()}}
                    <?php
                    echo "
                        <label for='bkr-checked'>BKR Checked?</label>
                        <input type='checkbox' name='checked' id='bkr-checked'>
                        <label for='bkr-approved'>BKR Approved?</label>
                        <input type='checkbox' name='approved' id='bkr-approved'>
                        <input type='submit' value='Send/Done'>
                    </form>
                    ";
                    session(["clientId" => $clientId]);
                }
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>