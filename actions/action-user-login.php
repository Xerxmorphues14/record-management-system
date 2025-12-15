<?php 
require 'pdo_conn.php';
require 'functions.php';
require 'session_variables.php';
require 'user_query_set.php';
// Set the timezone to Philippines
date_default_timezone_set('Asia/Manila');

if (isset($_POST['user_id'])){
$username = $_POST['user_name'];
$password = $_POST['password'];
        if (empty($username) || empty($password)) {
                echo "Username and password are required.";
                
            }
        else{
            $params = array('user_name' => $username);
            $query = $pdo->prepare($login_user_query);
            $res = $query->execute($params);
                if ($res) {
                 header("location:../dashboard/user_dashboard.php");
                } else {
                echo 'Failed to Truncate.';
                // Handle the error accordingly
                }
            }
}else{
    echo 'error';
}
