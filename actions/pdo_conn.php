<?php 
$server ="localhost";
$username = "root";
$password = "";
$database = "pr_tracking_database";
$password = "xerxmorphues14";
$database = "records_database";

session_start();

try {
    $pdo = new PDO("mysql:host=$server;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch (PDOException $e) {
    $error =  "Connection failed: " . $e->getMessage();
    $_SESSION['error'] = $error;
    echo $error;
}




?>