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
    
    echo "<table style='width:100%'>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td> 
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td> 
    <td>94</td>
  </tr>
</table>";
        
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
        echo "<p>Acrobatics</p>";
        echo $row['arcrobatics'];
        
        echo "<p>Animal Handling</p>";
        echo $row['animal_handling'];
        echo "<p>Arcana</p>";
        echo $row['arcana'];
        echo "<p>Athletics</p>";
        echo $row['athletics'];
        echo "<p>Deception</p>";
        echo $row['deception'];
        echo "<p>History</p>";
        echo $row['history'];
        echo "<p>Insight</p>";
        echo $row['insight'];
        echo "<p>Intimidation</p>";
        echo $row['intimidation'];
        echo "<p>Medicine</p>";
        echo $row['medicine'];
        echo "<p>Nature</p>";
        echo $row['nature'];
        echo "<p>Perception</p>";
        echo $row['perception'];
        echo "<p>Performance</p>";
        echo $row['performance'];
        echo "<p>Persuasion</p>";
        echo $row['persuasion'];
        echo "<p>Religion</p>";
        echo $row['religion'];
        echo "<p>Sleight of Hand</p>";
        echo $row['sleight_of_hand'];
        echo "<p>Stealth</p>";
        echo $row['stealth'];
        echo "<p>Survival</p>";
        echo $row['survival'];    
    
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
