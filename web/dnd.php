<?php
session_start();

try
{
    $dbUrl = getenv('DATABASE_URL');

    $dbopts = parse_url($dbUrl);

    $dbHost = $dbopts["host"];
    $dbPort = $dbopts["port"];
    $dbUser = $dbopts["user"];
    $dbPassword = $dbopts["pass"];
    $dbName = ltrim($dbopts["path"],'/');
    
    $db = new   PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName",   $dbUser, $dbPassword);
    
    foreach ($db->query('SELECT * FROM ability') as $row)
    {
        echo "<p>STR</p>";
        echo $row['str'];

        echo "<p>DEX</p>";
        echo $row['dex'];
         
        echo "<p>CON</p>";
        echo $row['con'];
         
        echo "<p>INT</p>";
        echo $row['int'];
        
        echo "<p>WIS</p>";
        echo $row['wis'];
         
        echo "<p>CHA</p>";
        echo $row['cha'];        
        echo '<br\>';        
    }
    /*
    foreach ($db->query('SELECT * FROM skill') as $row)
    {
        echo "<h3>Acrobatics</h3>";
        echo $row['Arcrobatics'];
        echo "<h3>Animal Handling</h3>";
        echo $row['Animal_Handling'];
        echo "<h3>Arcana</h3>";
        echo $row['Arcana'];
        echo "<h3>Athletics</h3>";
        echo $row['Athletics'];
        echo "<h3>Deception</h3>";
        echo $row['Deception'];
        echo "<h3>History</h3>";
        echo $row['History'];
        echo "<h3>Insight</h3>";
        echo $row['Insight'];
        echo "<h3>Intimidation</h3>";
        echo $row['Intimidation'];
        echo "<h3>Medicine</h3>";
        echo $row['Medicine'];
        echo "<h3>Nature</h3>";
        echo $row['Nature'];
        echo "<h3>Perception</h3>";
        echo $row['Perception'];
        echo "<h3>Performance</h3>";
        echo $row['Performance'];
        echo "<h3>Persuasion</h3>";
        echo $row['Persuasion'];
        echo "<h3>Religion</h3>";
        echo $row['Religion'];
        echo "<h3>Sleight of Hand</h3>";
        echo $row['Sleight_of_Hand'];
        echo "<h3>Stealth</h3>";
        echo $row['Stealth'];
        echo "<h3>Survival</h3>";
        echo $row['Survival'];    
    }
    */
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
?>
