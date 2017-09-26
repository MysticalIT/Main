<?php
/**
 * Created by PhpStorm.
 * User: Cyri
 * Date: 25-9-2017
 * Time: 10:10
 */?>

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
    <title>Admin Memo</title>
</head>
<body>
<div class="header">
    <div class="container">
        <div class="logo">
            <h1>Barroc IT</h1>
        </div>
        <div class="headerButtons">
            <ul>
                <li><a href="main.php">Back</a></li>
                <li><a href="memo.php?showhelp=true">Help</a></li>
            </ul>
        </div>
    </div>
</div>

<container class="btn-help">

</container>

 <container class="main-content">

     <div class="wrapper">
         <div class="memo">
             <form action="../../app/memoUpdate.php" method="get">
                 <textarea name="memo" id="memo" cols="30" rows="10"></textarea>
                 <input type="submit" value="Save Memo">
             </form>
         </div>
     </div>

 </container>

<div class="go-back">
    <a href="<?php// echo BASE_URL?>/public/Admin/adminMain.php">Back</a>
</div>
</body>
</html>
