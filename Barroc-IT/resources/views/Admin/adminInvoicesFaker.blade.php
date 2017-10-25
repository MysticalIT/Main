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
                <label for="from">From Project</label>
                <input type="number" name="from" id="from">
            </div>
            <div class="form-group form-group-add">
                <label for="to">To Project</label>
                <input type="number" name="to" id="to">
            </div>
            <div class="form-group form-group-add">
                <label for="charge">Price</label>
                <input type="number" name="charge" id="charge" step=".01">
            </div>
            <div class="form-group form-group-add">
                <label for="paid">Paid</label>
                <input type="number" name="paid" id="paid" min="0" max="1">
            </div>
            <div class="form-group form-group-add">
                <label for="amount">Amount of Invoices</label>
                <input type="number" name="amount" id="amount" min="1">
            </div>
            <div class="form-group form-group-add">
                <input type="submit" value="Add Invoices">
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
    $amount = $_POST["amount"];
    $count = 0;

    for ($i = $from; $i < $to + 1; $i++){
        for ($j = 0; $j < $amount; $j++){
        $count++;
        $invoice = new \App\Invoice();
        $invoice->project_id = $i;
        $invoice->subject = "Month " . $faker->numberBetween(1, 10);
        $invoice->price = $_POST["charge"];
        $invoice->paid = $_POST["paid"];
        $invoice->save();
        }
    }
}