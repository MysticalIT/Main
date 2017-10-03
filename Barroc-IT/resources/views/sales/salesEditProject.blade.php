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
    <title>Edit Project</title>
</head>
<body>
<?php


?>

<form action="" method="post">


    <label for="clientname">Client name</label>
    <input type="text" id="clientname" value="">

    <label for="clientphonenumber">Client phonenumber</label>
    <input type="text" id="clientphonenumber">

    <label for="projectname">Project name</label>
    <input type="text" id="projectname">

    <label for="projectDetails">Project details</label>
    <textarea id="projectDetails"></textarea>

    <label>Set invoice limit</label>
    <input type="text" id="setinvoice">

</form>
<table>
    <tr>
        <th>Name</th>
        <th>Client</th>
        <th>Details</th>
        <th>Limit</th>
    </tr>
    <?php
    echo "<li><a href='/addproject?clientId=$clientid'>Add Project</a></li>";

    error_reporting(0);
    $clientId= $_GET["clientId"];
    $projectId= $_GET["projectId"];

    $projects = DB::table("tbl_projects")->where("client_id", $clientId)->get();
    if ($projects > 0)
    {
        foreach ($projects as $project)
        {
            echo "

                    <tr>
                    <td><a href='salesEditProject.blade.php'>$project->name</a></td>
                    <td>$project->firstname $project->lastname</td>
                    <td>$project->limit</td>
                    </tr>

";
        }
    }

    ?>
</table>


</body>
</html>