<?php

// get the data from the POST
$name = $_POST['name'];
$class = $_POST['class'];
$level = $_POST['level'];
$race = $_POST['race'];
$alignment = $_POST['alignment'];
$characterIds = $_POST['chkcharacter'];
// For debugging purposes, you might include some echo statements like this
// and then not automatically redirect until you have everything working.
// echo "book=$book\n";
// echo "chapter=$chapter\n";
// echo "verse=$verse\n";
// echo "content=$content\n";
// we could (and should!) put additional checks here to verify that all this data is actually provided
require("dbConnect.php");
$db = get_db();
try
{
    
	// Add the Scripture
	// We do this by preparing the query with placeholder values
	$query = 'INSERT INTO character(name, class, level, race, alignment) VALUES(:name, :class, :level, :race, :alignment)';
	$statement = $db->prepare($query);
	// Now we bind the values to the placeholders. This does some nice things
	// including sanitizing the input with regard to sql commands.
	$statement->bindValue(':name', $name);
	$statement->bindValue(':class', $class);
	$statement->bindValue(':level', $level);
	$statement->bindValue(':race', $race);
	$statement->bindValue(':alignment', $alignment);
	$statement->execute();
	// get the new id
	$characterId = $db->lastInsertId("character_id_seq");
	// Now go through each topic id in the list from the user's checkboxes
	foreach ($characterIds as $characterId)
	{
		echo "characterId: $characterId, characterId: $characterId";
        $statement = $db->prepare('INSERT INTO character(name, class, level, race, alignment) VALUES(:name, :class, :level, :race, :alignment)');
		// Then, bind the values
		$statement->bindValue(':characterId', $characterId);
		$statement->bindValue(':characterId', $characterId);
		$statement->execute();
	}
}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}
// finally, redirect them to a new page to actually show the topics
header("Location: showTopics.php");
die(); // we always include a die after redirects. In this case, there would be no
       // harm if the user got the rest of the page, because there is nothing else
       // but in general, there could be things after here that we don't want them
       // to see.
?>