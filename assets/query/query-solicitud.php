<?php
    require 'conexion.php';
    $destines = $_REQUEST['select_destine'];
    $tienda   = $_REQUEST['select_tienda'];
    $door     = $_REQUEST['select_door'];

    $sql = "select * from db_table_destine where Determinante=".$tienda;
    $result = $conexion -> query($sql);

    $rows = $result -> fetch_array(MYSQLI_ASSOC);

    $tienda_club = htmlspecialchars($rows['Tienda Club']);

    $sql = "insert into db_table_solicitud values(null,'$tienda','$tienda_club','$door','$destines')";
    $result = $conexion ->query($sql);

    $sql_capturacion = "insert into db_table_capture values(null,null,'$tienda','$tienda_club','$destines','$door',null,null,null,null,null,null,null,null,null,null,null,null,null,null)";
    $result = $conexion->query($sql_capturacion); 

    if ($result) {
        header('location: ../../Platform/solicitudes.php');
        echo 'Se ha generado exitosamente la solicitud...';
    } else {
        echo 'No es posible ejecutar la tarea...';
    }

    ?>