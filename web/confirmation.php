<?php
    session_start();

echo $_SESSION["lastname"];
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>David Pruitt's Confirmation Page</title>
    </head>
    <body>
        <a href="homepage.html">Click here to return to homepage</a>
        <h1>David Pruitt's Confirmation Page</h1>
        
        <p>Name <?php echo $_POST["firstname"]; ?> <?php echo $_POST["lastname"]; ?></p>
        <p>Email <?php echo $_POST["email"]; ?></p>
        <p>Street <?php echo $_POST["street"]; ?></p>
        <p>Country <?php echo $_POST["country"]; ?></p>
        <p>City <?php echo $_POST["city"]; ?></p>
        <p>State <?php echo $_POST["state"]; ?></p>
        <p>Zip <?php echo $_POST["zip"]; ?></p>
        <p>Phone <?php echo $_POST["phone"]; ?></p>
    </body>
</html>