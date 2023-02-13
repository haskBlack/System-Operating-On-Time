<?php
    require '../assets/query/conexion.php';
    error_reporting();
    
    $id_capture = $_GET['id_capture'];
 
    $sql= "select * from db_table_capture where id_capture=".$id_capture;
    $result = $conexion->query($sql);

    if(!$result)die("Fatal Error");
  
    $rows= $result->num_rows;

    for($j=0;$j<$rows;$j++){
        $row = $result -> fetch_array(MYSQLI_ASSOC);

        echo htmlspecialchars($row['id_capture']);
}
?>