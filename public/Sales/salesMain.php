<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="../index.php">Logout</a>

        <div>
            <a href="salesMain.php?showHelp=true">Help</a>
        </div>

    <ul>
        <?php
        $clients;


        foreach ( $clients as $client)
        {
            echo "<li>'$client'</li>";
        }

    ?>
</ul>
    <a href="../../app/sales/add_client.php">Add Client here</a>
    <a href="../sales/call_client_list.php">Help</a>
    <a href="../sales/add_project.php">Help</a>
    <a href="../../app/sales/edit_client.php">Show Clients</a>
    <a href="../../app/sales/edit_client.php">Show Clients</a>

</body>
</html>