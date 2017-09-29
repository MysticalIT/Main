<?php
require_once("database.php");


$username = $_POST['department'];
$password = $_POST['password'];


if ($username != '')
{
    $sql = "SELECT username FROM tbl_users WHERE username = '$username'";
    $sth = $database->prepare($sql);
    $sth->execute();
    $fetchType = PDO::FETCH_ASSOC;
    $count = $sth->rowCount();
    $results = $sth->fetchall($fetchType);
    if($password = '')
    {

        if($count > 0)
        {
            $sql = "SELECT Password FROM tbl_users WHERE password = '$password'";
            $sth = $database->prepare($sql);
            $sth->execute();
            $fetchType = PDO::FETCH_ASSOC;
            $count = $sth->rowCount();
            $results = $sth->fetchall($fetchType);
            if ($count > 0)
            {
                echo "HAAAAI C:";
                header("location:../public/$username/".$username."Main.php?$message");

            }
            else
            {
                $message = "Please fill in a valid username b-baka!";
                header("location:../public/index.blade.php?$message");
            }
        }

    }
    else{
        $message = "Please fill in a password b-baka!";
        header("location:../public/index.blade.php?$message");
    }
}


else{
    $message = "Please fill in a username b-baka!";
    header("location:../public/index.blade.php?$message");

}


?>