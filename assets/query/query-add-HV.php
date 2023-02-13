<?php
    require 'conexion.php';
    error_reporting();

    $etiqueta = $_POST['etiqueta'];
    $determinante = substr($etiqueta,0,4);
    $terminacion = substr($etiqueta,14);
    echo $etiqueta . "<br>" . $determinante . "<br>" . $terminacion;

    $sql = "select * from db_table_destine where determinante='$determinante'";
    $result = $conexion->query($sql);

    if(!$result)die("Fatal Error");
    
    $rows = $result->num_rows;
    $row = $result ->fetch_array(MYSQLI_ASSOC);

    $tienda_club = htmlspecialchars($row['Tienda Club']);
    
    $sql = "insert into db_table_chv values(null,'$etiqueta','$determinante','$terminacion','$tienda_club',null,null,null,null,null,null)";
    $result = $conexion->query($sql);

    if(!$result)die("Fatal Error");

    header('location: ../../Platform/Add-HV.php');

?>