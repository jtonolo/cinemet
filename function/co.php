<?php
    $servername = "localhost";
    $username = "Jules";
    $password = "fefe8cb08";
    
    try{
        $conn = new PDO("mysql:host=$servername;dbname=Allocinemet;charset=utf8mb4", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
        catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>