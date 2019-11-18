<?php
$servername = "localhost";
$username = "root";
$password = "yourpassword"; //4jwH1kusmIz4A5UF

try {
    $conn = new PDO("mysql:host=$servername;dbname=", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully<br>";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>