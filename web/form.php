<?php

session_start();
echo $_SESSION['ironman'];

?>

<html>  
    <head>
        <title>View Cart</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <a href="shoppingCart.php"><h2>Back to Browse</h2></a>
        <h1>View Cart Page</h1>
        <form action="checkoutCart.php" method="post">
            <table>
                <th>Remove from Cart</th>
                <th> Item </th>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><p><?php echo $_POST["ironman"]; ?></p></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><p><?php echo $_POST["ironman2"]; ?></p></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><p><?php echo $_POST["ironman3"]; ?></p></td>
                </tr>
               <tr>
                    <td><input type="checkbox"></td>
                    <td><p><?php echo $_POST["cap"]; ?></p></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><p><?php echo $_POST["cap2"]; ?></p></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><p><?php echo $_POST["cap3"]; ?></p></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><p><?php echo $_POST["thor"]; ?></p></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><p><?php echo $_POST["thor2"]; ?></p></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><p><?php echo $_POST["thor3"]; ?></p></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><p><?php echo $_POST["hulk"]; ?></p></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><p><?php echo $_POST["hulk2"]; ?></p></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><p><?php echo $_POST["galaxy"]; ?></p></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><p><?php echo $_POST["galaxy2"]; ?></p></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><p><?php echo $_POST["antman"]; ?></p></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><p><?php echo $_POST["doctor"]; ?></p></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><p><?php echo $_POST["avenger"]; ?></p></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><p><?php echo $_POST["avenger2"]; ?></p></td>
                </tr>
            </table>
            <input type="submit">
        </form>
    </body>
</html>