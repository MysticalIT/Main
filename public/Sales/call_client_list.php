<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sales_call_client</title>
</head>
<body>


<a href="../../app/sales/edit_client.php?showClients=true">View clients</a>
<a href="../../public/sales/salesMain.php">Back</a>

<?php

$clients;

if ($_GET['showclients=true'])
{
    foreach ($clients as $client)
    {
        echo"<li>$client</li> ";
    }
}
echo "<p>$details_client</p>"
?>

<a href="../../app/sales/edit_client.php?clientid=$id">Edit client</a>
<a href="../../app/sales/edit_project.php"></a>



</body>
</html>