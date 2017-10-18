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
    
    echo "<table style='width:30%'>
  <tr>
    <th>STR</th>
    <th>DEX</th> 
    <th>CON</th>
    <th>INT</th>
    <th>WIS</th>
    <th>CHA</th>
  </tr>";
        
    foreach ($db->query('SELECT * FROM ability') as $row)
    {
        echo "<tr><td>";
        echo $row['str']; 
        echo "</td>";
        echo "<td>";
        echo $row['dex']; 
        echo "</td>";
        echo "<td>";
        echo $row['con']; 
        echo "</td>";
        echo "<td>";
        echo $row['int']; 
        echo "</td>";
        echo "<td>";
        echo $row['wis']; 
        echo "</td>";
        echo "<td>";
        echo $row['cha']; 
        echo "</td></tr>";
    }
    echo "</table>";
    echo "<table style='width:30%'>
  <tr>
    <th>Acrobatics</th>
    <th>Animal Handling</th> 
    <th>Arcana</th>
    <th>Athletics</th>
    <th>Deception</th>
    <th>History</th>
    <th>Insight</th>
    <th>Intimidation</th> 
    <th>Medicine</th>
    <th>Nature</th>
    <th>Perception</th>
    <th>Performance</th>
    <th>Persuasion</th>
    <th>Religion</th> 
    <th>Sleight of Hand</th>
    <th>Stealth</th>
    <th>Survival</th>
  </tr>";
    foreach ($db->query('SELECT * FROM skill') as $row)
    {
        
        echo "<tr><td>";
        echo $row['arcrobatics']; 
        echo "</td>";
        
        echo "<td>";
        echo $row['animal_handling']; 
        echo "</td>";
        echo "<td>";
        echo $row['arcana']; 
        echo "</td>";
        echo "<td>";
        echo $row['athletics']; 
        echo "</td>";
        echo "<td>";
        echo $row['deception']; 
        echo "</td>";
        echo "<td>";
        echo $row['history']; 
        echo "</td>";
        echo "<td>";
        echo $row['insight']; 
        echo "</td>";
        echo "<td>";
        echo $row['intimidation']; 
        echo "</td>";
        echo "<td>";
        echo $row['medicine']; 
        echo "</td>";
        echo "<td>";
        echo $row['nature']; 
        echo "</td>";
        echo "<td>";
        echo $row['perception']; 
        echo "</td>";
        echo "<td>";
        echo $row['performance']; 
        echo "</td>";
        echo "<td>";
        echo $row['persuasion']; 
        echo "</td>";
        echo "<td>";
        echo $row['religion']; 
        echo "</td>";
        echo "<td>";
        echo $row['sleight_of_hand']; 
        echo "</td>";
        echo "<td>";
        echo $row['stealth']; 
        echo "</td>";
        echo "<td>";
        echo $row['survival']; 
        echo "</td>"; 
    }
    echo "</table>";
    foreach ($db->query('SELECT * FROM stats') as $row)
    {
        echo "<td>hitDie</td>";
        echo $row['hitdie'];   
        echo "<td>Speed</td>";
        echo $row['speed'];
    }
    
    foreach ($db->query('SELECT * FROM equipment') as $row)
    {
        echo "<td>Weapon</td>";
        echo $row['weapon_name'];   
        echo "<td>weapon Damage</td>";
        echo $row['weapon_damage'];
        echo "<td>Type</td>";
        echo $row['weapon_damage_type'];   
        echo "<td>Armor</td>";
        echo $row['armor_name'];
        echo "<td>Armor Class</td>";
        echo $row['armor_class'];
        echo "<td>Money</td>";
        echo $row['money'];
        
    }
    
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
?>
