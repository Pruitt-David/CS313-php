<?php
   session_start();
    $_SESSION["color"] = "green";
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>David Pruitt's Checkout Cart Page</title>
        <script src="function.js"></script>
    </head>
    <body>
        <a href="homepage.html">Click here to return to homepage</a>
        <a href="shoppingCart.html">Shopping Cart</a>
        <a href="viewCart.html">View Cart</a>
        <h1>David Pruitt's Checkout Cart Page</h1>
        <p>Please fill out the following</p>
        <form action="confirmation.php" method="post">
            <h5>First name</h5>   
            <input type="text" name="firstname" value="David"> 
            <h5>Last name</h5>
            <input type="text" name="lastname">
            <h5>Email Address</h5>
            <input type="email" name="email">
            <h5>Street Address</h5>
            <input type="text" name="street">
            <h5>Country</h5>
            <input type="text" name="country" value="United States of America">
            <h5>City</h5>
            <input type="text" name="city">
            <h5>State</h5>
            <select name="state">
                <option>AL</option>
                <option>AK</option>
                <option>AZ</option>
                <option>AR</option>
                <option>CA</option>
                <option>CO</option>
                <option>CT</option>
                <option>DE</option>
                <option>FL</option>
                <option>GA</option>
                <option>HI</option>
                <option>ID</option>
                <option>IL</option>
                <option>IN</option>
                <option>IA</option>
                <option>KS</option>
                <option>KY</option>
                <option>LA</option>
                <option>ME</option>
                <option>MD</option>
                <option>MA</option>
                <option>MI</option>
                <option>MN</option>
                <option>MS</option>
                <option>MO</option>
                <option>MT</option>
                <option>NE</option>
                <option>NV</option>
                <option>NH</option>
                <option>NJ</option>
                <option>NM</option>
                <option>NY</option>
                <option>NC</option>
                <option>ND</option>
                <option>OH</option>
                <option>OK</option>
                <option>OR</option>
                <option>PA</option>
                <option>RI</option>
                <option>SC</option>
                <option>SD</option>
                <option>TN</option>
                <option>TX</option>
                <option>UT</option>
                <option>VT</option>
                <option>VA</option>
                <option>WA</option>
                <option>WV</option>
                <option>WI</option>
                <option>WY</option>
            </select>
            <h5>Zip Code</h5>
            <input type="text" name="zip">
            <h5>Phone Number</h5>
            <input type="text" name="phone">
           <input type="submit">
        </form>
     
    </body>
</html>