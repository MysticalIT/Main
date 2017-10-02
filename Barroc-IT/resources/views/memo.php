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
    <title>Memo's</title>
</head>
<body>

<header>
    <div class="wrapper">
        <ul class="headerButtons">
            <li><a href="developmentMain.blade.php">Back</a></li>
            <li><a href="developmentMemo.blade.php?showhelp=true">Help</a></li>
        </ul>
    </div>
</header>

<container class="main-content">

    <div class="wrapper">

        <div class="memo">
            <div class="listprojects">
                <ul>
                    <?php
                        foreach($projects as $project)
                        {
                            echo "<li><a href='/memo?projectid=$project->id'>$project->id</a></li>";
                        }
                    ?>
                </ul>
            </div>
            <div class="editmemo">
                <?php
                echo"<form action='/memoUpdate' method='post'>
                    <textarea name='memo' id='memo' cols='30' rows='10'></textarea>
                    <input type='submit' value='Save Memo'>
                </form>"               ?>

            </div>
        </div>
    </div>
</container>



</body>
</html>