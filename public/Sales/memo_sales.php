<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Memo Sales</title>
</head>
<body>
<?php
require ("../../404_page.php")
?>
<div class="container">
    <div class="wrapper">
        <header>
            <ul>
                <li><a href="salesMain.php">Back</a></li>
                <li><a href="memo_sales.php?showhelp=true">Help</a></li>
            </ul>
        </header>
        <div class="memo">
            <form action="../../app/memoUpdate.php" method="get">
                <textarea name="memo" id="memo" cols="30" rows="10"></textarea>
                <input type="submit" value="Save Memo">
            </form>
        </div>
    </div>
</div>
</body>
</html>