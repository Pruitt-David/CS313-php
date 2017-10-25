?php
/**********************************************************
* File: showTopics.php
* Author: Br. Burton
* 
* Description: This file retrieves the scriptures and topics
* from the DB.
***********************************************************/
require("dbConnect.php");
$db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
	<title>show new dnd list</title>
</head>

<body>
<div>

<h1>DND List</h1>

<?php
try
{
	$statement = $db->prepare('SELECT id, name, class, level, race, alignment FROM character');
	$statement->execute();
	// Go through each result
	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		echo '<p>';
        
		echo '<strong>' . $row['name'] . ' ' . $row['class'] . ':';
		echo $row['level'] . '</strong>' . ' - ' . $row['race'];
        echo $row['alignment'] . '</strong>' . ' - ' . $row['alignment'];
		echo '<br />';
		echo 'Character: ';
		// get the topics now for this scripture
		$stmtTopics = $db->prepare('SELECT name FROM character t'
			. ' INNER JOIN character st ON st.character = t.id'
			. ' WHERE st.characterId = :characterId');
		$stmtTopics->bindValue(':characterId', $row['id']);
		$stmtTopics->execute();
		// Go through each topic in the result
		while ($topicRow = $stmtTopics->fetch(PDO::FETCH_ASSOC))
		{
			echo $topicRow['name'] . ' ';
		} 
		echo '</p>';
	}
}
catch (PDOException $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
?>

</div>

</body>
</html>