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
    foreach ($db->query('SELECT * FROM skill') as $row)
    {
        echo "<p>Deception</p>";
        echo $row['deception'];        
        
        /*
        echo "<p>Acrobatics</p>";
        echo $row['Arcrobatics'];
        */
        echo "<p>Animal Handling</p>";
        echo $row['Animal_Handling'];
        echo "<p>Arcana</p>";
        echo $row['Arcana'];
        echo "<p>Athletics</p>";
        echo $row['Athletics'];
        echo "<p>Deception</p>";
        echo $row['Deception'];
        echo "<p>History</p>";
        echo $row['History'];
        echo "<p>Insight</p>";
        echo $row['Insight'];
        echo "<p>Intimidation</p>";
        echo $row['Intimidation'];
        echo "<p>Medicine</p>";
        echo $row['Medicine'];
        echo "<p>Nature</p>";
        echo $row['Nature'];
        echo "<p>Perception</p>";
        echo $row['Perception'];
        echo "<p>Performance</p>";
        echo $row['Performance'];
        echo "<p>Persuasion</p>";
        echo $row['Persuasion'];
        echo "<p>Religion</p>";
        echo $row['Religion'];
        echo "<p>Sleight of Hand</p>";
        echo $row['Sleight_of_Hand'];
        echo "<p>Stealth</p>";
        echo $row['Stealth'];
        echo "<p>Survival</p>";
        echo $row['Survival'];    
    
    }
    
    foreach ($db->query('SELECT * FROM stats') as $row)
    {
        echo "<p>hitDie</p>";
        echo $row['hitdie'];   
        echo "<p>Speed</p>";
        echo $row['speed'];
    }
    
    foreach ($db->query('SELECT * FROM equipment') as $row)
    {
        echo "<p>Weapon</p>";
        echo $row['weapon_name'];   
        echo "<p>weapon Damage</p>";
        echo $row['weapon_damage'];
        echo "<p>Type</p>";
        echo $row['weapon_damage_type'];   
        echo "<p>Armor</p>";
        echo $row['armor_name'];
        echo "<p>Armor Class</p>";
        echo $row['armor_class'];
        echo "<p>Money</p>";
        echo $row['money'];
        
    }
    
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
?>
