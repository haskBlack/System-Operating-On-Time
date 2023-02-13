<?php
    require 'conexion.php';
    error_reporting();

    $start_marchamo = $_POST['inicio'];
    $stop_marchamo = '99';

    for($suma=$start_marchamo;$suma<=$stop_marchamo;$suma++){

        $suma = $suma;

        $sql = "insert into db_table_marchamos values(null,'$suma',null,null,null,null,null,null,null,null,null)";
        $result = $conexion -> query($sql);
        if(!$result)die("Fatal Error");
    }

    header('location: ../../Platform/index.php');

?>