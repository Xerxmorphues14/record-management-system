<?php 
require 'pdo_conn.php';
require 'functions.php';
require 'session_variables.php';
require 'user_query_set.php';
// Set the timezone to Philippines
date_default_timezone_set('Asia/Manila');

if (isset($_POST['admin_id'])){
$email = $_POST['email'];
$password = $_POST['password'];
     if (empty($email) || empty($password)) {
                echo "Username and password are required.";
                
            }
        else{
            $params = array('email' => $email);
            $query = $pdo->prepare($login_user_query);
            $res = $query->execute($params);
             if ($res) {
                 header("location:../dashboard/admin_dashboard.php");
                } else {
                echo 'Failed to Truncate.';
                // Handle the error accordingly
                }   
        }
    }else{
        echo "failed";
    }