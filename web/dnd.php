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
        echo $row['str'];
        echo $row['dex'];
        echo $row['con'];
        echo $row['int'];
        echo $row['wis'];
        echo $row['cha'];
        
        echo '<br\>';
        
    }
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
?>