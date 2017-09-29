<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
    <title>Sales</title>
</head>
<body>
<header>
    <div class="links">
        <div class="wrapper">
            <ul class="headerButtons">
               <li><a href="salesMain.php?showHelp=true">Help</a></li>
                <a href="../index.php">Logout</a>
            </ul>
        </div>
    </div>
</header>


    <container class="main-content">

<div class="client-list">
        <ul>
            <?php
            $clients;


            foreach ( $clients as $client)
            {
                echo "<li>'$client'</li>";
            }

        ?>
    </ul>
</div>



    <div class="sales-nav"
    <ul>
        <li><a href="../../app/sales/add_client.php">Add Client here</a></li>
        <li><a href="../sales/call_client_list.php">Call list for clients</a></li>
        <li><a href="../../app/sales/add_project.php">Add Project</a></li>
        <li><a href="../../app/sales/edit_client.php">Show Clients</a></li>
        <li><a href="memo_sales.php">Show sales memos</a></li>

    </ul>
    </div>
</container>





</body>
</html>