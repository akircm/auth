<?php
session_start();
include('../database/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $stmt = $conn->prepare(query: "SELECT * FROM users WHERE username = :username AND password = :password");
    $stmt->execute(params: ['username' => $username, 'password' => $password]);
    $user = $stmt->fetch(); 

    if ($user) { 
        $_SESSION['logged_in'] = true;
        $_SESSION['user'] = $user; 
        header(header: 'Location: ../welcome.php'); 
        exit;
    }
     else {
        $error = "Invalid username or password!";
        header(header: 'Location: ../index.php?error=' . $error); 
        exit;
    }
    
} else {
    header(header: 'Location: ../index.php'); 
    exit;
}
?>