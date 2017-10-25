<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>David Pruitt's Dungeon and Dragons Page</title>
    </head>
    <body>
        <a href="homepage.html">Click here to return to homepage
        </a>
        <h1>David Pruitt's Dungeon and Dragons Page</h1>
        <?php
            require 'dnd.php';
        ?>
        <p>Create a new Character</p>
        <form id="mainForm" action="insertCharacter.php" method="post">
            <input type="text" id="txtName" name="txtName">
            <label for="txtName">Name</label>

        
            <input type="text" id="txtClass" name="txtClass">
            <label for="txtClass">Class</label>
 

            <input type="text" id="txtlevel" name="txtlevel">
            <label for="txtlevel">Level</label>
            
            <input type="text" id="txtrace" name="txtrace">
            <label for="txtrace">Race</label>
            
            <input type="text" id="txtalignment" name="txtalignment">
            <label for="txtalignment">Alignment</label>


            <label>Character:</label>
            <?php
            try
            {
                $statement = $db->prepare('SELECT id, name FROM character');
                $statement->execute();
	// Go through each result
	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		$id = $row['id'];
		$name = $row['name'];
		// Notice that we want the value of the checkbox to be the id of the label
		echo "<input type='checkbox' name='chkcharacter[]' id='chkcharacter$id' value='$id'>";
	
		echo "<label for='chkcharacter$id'>$name</label><br />";
		echo "\n";
	}
}
catch (PDOException $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error connecting to DB. Details: $ex";
	die();
}
?>
            
            <input type="submit" value="Add to Database"/>
        </form>
    </body>
</html>