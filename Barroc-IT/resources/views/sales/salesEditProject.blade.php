<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Project</title>
</head>
<body>
<?php
        $clientId= $_GET["clientId"];
        $projectId= $_GET["projectId"];


        ?>

<form action="" method="post">

    <label for="clientname">Client name</label>
    <label for="clientphonenumber">Client phonenumber</label>
    <label for="projectname">Project name</label>
    <label for="projectDetails">Project details</label>
    <input type="text" id="clientname">
    <input type="text" id="clientphonenumber">
    <input type="text" id="projectname">
    <textarea id="projectDetails"></textarea>

    <a href="/createInvoice?projectId=">Set invoice limit</a>


</form>

</body>
</html>