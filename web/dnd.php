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

    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    
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
        echo $row["arcrobatics"];
    }
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
?>