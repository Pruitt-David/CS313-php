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
            <input type="text" id="txtBook" name="txtBook">
            <label for="txtBooK">Book</label>

        
            <input type="text" id="txtChapter" name="txtChapter">
            <label for="txtChapter">Chapter</label>
 

            <input type="text" id="txtVerse" name="txtVerse">
            <label for="txtVerse">Verse</label>


            <label for="txtContent">Content:</label>
            <textarea id="txtContent" name="txtContent" rows="4" cols="50"></textarea>
            
            <label>Topics:</label>
            <?php
// This section will now generate the available check boxes for topics
// based on what is in the database
// As before, it would be better to break this out into a separate function
// in a separate file, that handled the DB interaction, and returned
// a list of topics. But to keep things as clear as possible we can
// also query and loop through the results, right here.
try
{
	// Notice that we do not use "SELECT *" here. It is best practice
	// to only bring back the fields that you need.
	// prepare the statement
	$statement = $db->prepare('SELECT id, name FROM topic');
	$statement->execute();
	// Go through each result
	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		$id = $row['id'];
		$name = $row['name'];
		// Notice that we want the value of the checkbox to be the id of the label
		echo "<input type='checkbox' name='chkTopics[]' id='chkTopics$id' value='$id'>";
		// Also, so they can click on the label, and have it select the checkbox,
		// we need to use a label tag, and have it point to the id of the input element.
		// The trick here is that we need a unique id for each one. In this case,
		// we use "chkTopics" followed by the id, so that it becomes something like
		// "chkTopics1" and "chkTopics2", etc.
		echo "<label for='chkTopics$id'>$name</label><br />";
		// put a newline out there just to make our "view source" experience better
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