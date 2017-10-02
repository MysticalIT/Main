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
<a href="/sales">Back</a>
<form method="post" action="">
    {{csrf_field()}}

    <label for="companyName">Client company name:</label>
    <input type="text" name="companyName" id="companyName">

    <label for="street">Client street:</label>
    <input type="text" name="street" id="street">

    <label for="house-number">Client house number:</label>
    <input type="text" name="house-number" id="house-number">

    <label for="city">Client city:</label>
    <input type="text" name="city" id="city">

    <label for="zip-code">Client zip-code</label>
    <input type="text" name="zip-code" id="zip-code">

    <label for="clientFirstName">Client first name</label>
    <input type="text" name="clientFirstName" id="clientFirstName">

    <label for="clientLastName">Client last name</label>
    <input type="text" name="clientLastName" id="clientLastName">

    <label for="phoneNumber">Client phone number</label>
    <input type="text" name="phoneNumber" id="phoneNumber">

    <label for="email">Client email:</label>
    <input type="text" name="email" id="email">

    <input type="submit" value="Add client">
</form>
</body>
</html>