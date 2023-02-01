<?php
    require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="" id="">
        <option value="">Selecciona la opcion deseada</option>
<?php
    $sql = "select * from db_table_destine";
    $result = $conexion->query($sql);
    if(!$result)die("Error Fatal");

    $rows = $result->num_rows;

    for($j=0;$j<$rows;$j++){

        $row = $result->fetch_array(MYSQLI_ASSOC);

        echo "<option value=".htmlspecialchars($row['Determinante']).">".htmlspecialchars($row['Determinante'])." - ".htmlspecialchars($row['Tienda Club'])."</option>";

    }
?>
</select>

</body>
</html>