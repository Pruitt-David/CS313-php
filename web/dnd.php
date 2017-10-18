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
    
    foreach ($db->query('SELECT * FROM skill') as $Xrow)
    {
        echo "<h3>Acrobatics</h3>";
        echo $Xrow['Arcrobatics'];
        echo "<h3>Animal Handling</h3>";
        echo $Xrow['Animal_Handling'];
        echo "<h3>Arcana</h3>";
        echo $Xrow['Arcana'];
        echo "<h3>Athletics</h3>";
        echo $Xrow['Athletics'];
        echo "<h3>Deception</h3>";
        echo $Xrow['Deception'];
        echo "<h3>History</h3>";
        echo $Xrow['History'];
        echo "<h3>Insight</h3>";
        echo $Xrow['Insight'];
        echo "<h3>Intimidation</h3>";
        echo $Xrow['Intimidation'];
        echo "<h3>Medicine</h3>";
        echo $Xrow['Medicine'];
        echo "<h3>Nature</h3>";
        echo $Xrow['Nature'];
        echo "<h3>Perception</h3>";
        echo $Xrow['Perception'];
        echo "<h3>Performance</h3>";
        echo $Xrow['Performance'];
        echo "<h3>Persuasion</h3>";
        echo $Xrow['Persuasion'];
        echo "<h3>Religion</h3>";
        echo $Xrow['Religion'];
        echo "<h3>Sleight of Hand</h3>";
        echo $Xrow['Sleight_of_Hand'];
        echo "<h3>Stealth</h3>";
        echo $Xrow['Stealth'];
        echo "<h3>Survival</h3>";
        echo $Xrow['Survival'];    
    }
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
?>
