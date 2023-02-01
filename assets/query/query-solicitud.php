<?php
    require 'conexion.php';
    $destines = $_REQUEST['select_destine'];
    $tienda   = $_REQUEST['select_tienda'];
    $door     = $_REQUEST['select_door'];

    $sql = "insert into db_table_solicitud values(null,'$tienda',null,'$door','$destines')";
    $result = $conexion ->query($sql);

    $sql_capturacion = "insert into db_table_capture values(null,null,'$tienda',null,'$destines','$door',null,null,null,null,null,null,null,null,null,null,null)";
    $result = $conexion->query($sql_capturacion); 

    if ($result) {
        header('location: ../../Platform/solicitudes.php');
        echo 'Se ha generado exitosamente la solicitud...';
    } else {
        echo 'No es posible ejecutar la tarea...';
    }

    ?>