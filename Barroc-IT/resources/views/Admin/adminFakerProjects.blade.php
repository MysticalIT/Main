<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset("css/main.css") }}">
    <title>Document</title>
</head>
<body>
<div class="main-content">
    <div class="container-fluid">
        <form action="" method="post" class="add-client">
            {{csrf_field()}}
            <div class="form-group form-group-add">
                <label for="from">From Client</label>
                <input type="number" name="from" id="from">
            </div>
            <div class="form-group form-group-add">
                <label for="to">To Client</label>
                <input type="number" name="to" id="to">
            </div>
            <div class="form-group form-group-add">
                <input type="submit" value="Add Projects">
            </div>
        </form>
    </div>
</div>


</body>
</html>

<?php
if((isset($_POST["from"]) && $_POST["from"] > 0) && (isset($_POST["to"]) && $_POST["to"] > $_POST["from"]))
{
    $faker = Faker\Factory::create();
    $from = $_POST["from"];
    $to = $_POST["to"];
    $count = 0;
    for ($i = $from; $i < $to + 1; $i++){
        $count++;
        $project = new \App\Project();
        $project->client_id = $i;
        $project->name = "$i Web browser";
        $project->description = $faker->text();
        $project->limit = 800;
        $project->save();

        $clientInfo = \App\Client::find($i);
        $memo = new \App\Memo();
        $memo->project_id = $project->id;
        $memo->memo = "Project Name: {$project->name},
Owner Name: {$clientInfo->firstname} {$clientInfo->lastname},
";
        $memo->save();
    }
}