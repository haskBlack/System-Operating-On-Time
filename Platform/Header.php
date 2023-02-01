<?php
    session_start();
    error_reporting();

    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Suply Chain</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <script src="https://kit.fontawesome.com/810d7d5117.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="fixed">
        <header>
            <div class="title"><span class="txt-title">System Operating</span><img src="../img/wm.png"><span class="txt-title2">On - Time</span></div>
            <a href="../assets/query/session_dstroy.php"><div class="btn-logout"><span class="snlogout">Log out</span></div></a>
        </header>
            <h2 class="userh1">BIENVENIDO <span class="userspan" id="user"> <?php echo "VICTOR DANIEL LUNA JUAREZ"; ?></span></h1>
    </div>