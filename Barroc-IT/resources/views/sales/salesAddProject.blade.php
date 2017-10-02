<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add project</title>
</head>
<body>

<form action="" method="post">

    <label for="clientname">Client name</label>
    <input type="text" id="clientname">

    <label for="clientphonenumber">Client phonenumber</label>
    <input type="text" id="clientphonenumber">

    <label for="projectname">Project name</label>
    <input type="text" id="projectname">

    <label for="projectDetails">Project details</label>
    <textarea id="projectDetails"></textarea>



</form>
<a href="/createInvoice?projectId=">Set invoice limit</a>

<?php

    $clientid= $_POST["clientid"];





        ?>


</body>
</html>