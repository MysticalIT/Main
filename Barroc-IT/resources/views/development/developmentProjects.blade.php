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
    <title>Development - Projects</title>
</head>
<body>




<div class="container">
    <header>


        <div class="wrapper">
            <nav class="navigation">
                <ul>
                    <li></li>
                    <li><a href="developmentMain.blade.php">Back</a></li>
                    <li><a href="developmentProjects.blade.php?showhelp=true">Help</a></li>
                </ul>
            </nav>
        </div>
    </header>




    <div class="listProjects">


        <div class="wrapper">
            <a href="/projects?loadprojects=true">Show Projects</a>


            <div class="projectList">
                <table>

                    <tr>
                        <th>Project</th>
                        <th>Name:</th>
                        <th>Description:</th>
                    </tr>

                    <tr>
                        <th>Project</th>
                        <th>Name:</th>
                        <th>Description:</th>
                    </tr>

                    <tr>
                        <th>Project</th>
                        <th>Name:</th>
                        <th>Description:</th>
                    </tr>
                </table>
            </div>
        </div>

    </div>



</div>

</body>
</html>