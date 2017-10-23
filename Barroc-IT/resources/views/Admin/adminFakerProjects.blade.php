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
        $project->name = $faker->company . " Web browser";
        $project->description = $faker->text();
        $project->limit = $faker->randomFloat(2, 0, null);
        $project->save();
    }
}