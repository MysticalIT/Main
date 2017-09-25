<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add client</title>
</head>
<body>

    <a href="../../public/sales/salesMain.php">Back</a>
    <a href="../sales/add_client.php?showHelp=true">Help</a>


    <form action="../../app/sales/add_client.php" method="get">

    <label for="company_name">Company name of client:</label>
    <input type="text" name="company_name" title="company_name">

    <label for="adress">Adress of client:</label>
    <input type="text" name="adress" title="adress_client">

    <label>Zipcode of client:</label>
    <input type="text" name="zipcode" title="zipcode_client">

    <label>Name of client:</label>
    <input type="text" name="name_client" title="name_client">

    <label>Phone Number of client:</label>
    <input type="tel" name="phone_number" title="phone_number_client">

    <label>Last date of contact</label>
    <input type="date" name="date_contact" title="date_of_contact_client">

    <input type="submit" value="Add Client">

    </form>
</body>
</html>