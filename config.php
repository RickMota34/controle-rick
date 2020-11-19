<?php

$dbnome = "mysql:dbname=controleestoque;host=localhost";
$dbuser = "root";
$dbpass = "";

try {

    $pdo = new PDO($dbnome, $dbuser, $dbpass);

} catch (PDOException $e) {
    
    echo "erro:" .$e->getMessage(); 
}


