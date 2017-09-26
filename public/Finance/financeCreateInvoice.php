<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Finance - Create Invoice</title>
</head>
<body>
<div class="container">
    <div class="links">
        <div class="wrapper">
            <ul>
                <li><a href="financeInvoices.php">Back</a></li>
                <li><a href="">Help</a></li>
            </ul>
        </div>
    </div>
    <div class="invoiceForm">
        <div class="wrapper">
            <form action="" method="post">
                <label for="invoiceSubject">Subject:</label>
                <input type="text" id="invoiceSubject" name="subject">
                <label for="invoicePrice">Price:</label>
                <input type="text" id="invoicePrice" name="price">
                <input type="submit" value="Create Invoice">
            </form>
        </div>
    </div>
</div>
</body>
</html>