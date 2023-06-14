<?php

session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body
        {
        background-image:url('../images/empcourier pic.jpg');
        background-repeat: no-repeat;
        background-size: 1300px 500px;
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>
    <div align='center' style="font-weight: bold;font-family:'Times New Roman', Times, serif"><br><br><br><br>
        <h2>Emperor Wize Logistics Company</h2>
        <h4>The fastest courier service of Nigeria</h4><br><br>
        <h3>DBMS PROJECT</h3>
    </div>
</body>
</html>