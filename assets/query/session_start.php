<?php
    require 'conexion.php';
    session_start();
    error_reporting();

    $_SESSION['HTTP_NICKNAME'] = $_POST['username'];
    $_SESSION['HTTP_PASSWORD'] = $_POST['passwor'];

    $username = $_POST['username'];
    $pw     = $_POST['passwor'];

    $sql = "select * from db_table_user where nickname='$username' and password='$pw'";
    $result = $conexion->query($sql);

    if ($result) {
        header('location: ../../Platform/index.php');
    } else {
        header('location: ../../index.php');
        echo 'Usuario o contrasena no valido, favor de intentar nuevamente';
    }
?>