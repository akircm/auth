<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: index.php');
    exit;
}

if (isset($_SESSION['user'])){
    $user = $_SESSION['user'];
} else {

    header ('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
   <style>
    body { font-family: Arial, sans-serif; background-color: #f2f2f2; text-align: center; padding: 50px; }
        .btn { padding: 10px 20px; background-color: #f44336; color: white; border: none; border-radius: 5px; cursor: pointer; }
        .btn:hover { background-color: #e53935; }
        .error { color: red; }
   </style>
</head>
<body>
 
 
<a href="php/logout.php"><button class="btn">Logout</button></a>
 
</body>
</html>
 