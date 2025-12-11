<?php 
$server ="localhost";
$username = "root";
$password = "xerxmorphues14";
$database = "";


session_start();

try {
    $pdo = new PDO("mysql:host=$server;dbname=$db_name", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch (PDOException $e) {
    $error =  "Connection failed: " . $e->getMessage();
    $_SESSION['error'] = $error;
    echo $error;
}




?>