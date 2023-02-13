<?php
    require 'conexion.php';
    error_reporting();

    $id_solicitud = $_GET['id_solicitud'];
    $determinante = $_GET['Determinante'];
    $tienda_club = $_GET['Tienda-club'];
    $Door = $_GET['Cortina'];
    $Destine = $_GET['Destine'];
    $linea = $_GET['linea'];
    $economic = $_GET['Economico'];
    $placas = $_GET ['Placas'];




    echo $id_solicitud;

    $sql = "insert into db_table_capture values(null,null,'$determinante','$tienda_club','$Destine','$Door','$linea','$economic','$placas',null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null)";
    $result = $conexion->query($sql);

    if(!$result)die("Fatal Error");
    
    $sql = "DELETE FROM db_table_solicitud WHERE id_solicitud= '$id_solicitud'";
    $result = $conexion->query($sql);

    if(!$result)die('Fatal Error');

    header('location: ../../../Platform/solicitudes.php');
?>