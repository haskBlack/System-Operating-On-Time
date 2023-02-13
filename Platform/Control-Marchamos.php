<?php
    require '../assets/query/conexion.php';
    require 'header.php';
    require 'home.php';
    error_reporting();
?>

<div class="box cajon">
    <h2 class="msj-h2">CONTROL DE MARCHAMOS</h2>
        <div class="mod-tool">
            <p class="msj-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, nihil harum placeat possimus facere consectetur a impedit ipsum modi quaerat aspernatur ducimus odio cupiditate quae fugiat maxime fugit distinctio optio.</p>
        
            <select name="" id="" class="seleccions">
                <option value="">Selecciona el consecutivo</option>
                <option value="">440000 - 440099</option>
                <option value="">440100 - 440199</option>
                <option value="">440200 - 440299</option>
                <option value="">440300 - 440399</option>
                <option value="">440400 - 440499</option>
                <option value="">440500 - 440599</option>
            </select>
            <form action="../assets/query/query-gen-marchamos.php" method="Post">
            <input type="text" name="inicio" class="txt-form" placeholder="inicio">
            <input type="submit" value="suma" class="btn-generate">
            </form>

            <table>
                <div>
                <tr class="table-data-header">
                    <th>Seleccions</th>
                    <th>Marchamo</th>
                    <th>Determinante</th>
                    <th>Destine</th>
                    <th>Door</th>
                    <th>Transport Line</th>
                    <th>Placas</th>
                    <th>No. Economico</th>
                    <th>Shipping Line</th>
                </tr>

    <?php
        $sql= "select * from db_table_marchamos";
        $result = $conexion->query($sql);

        if(!$conexion)die("Fatal Error");

        $rows = $result->num_rows;

        for($j=0;$j<$rows;$j++){
            $row=$result->fetch_array(MYSQLI_ASSOC);?>

            <tr class="data-row">
                <td><input type="checkbox" value="<?php echo htmlspecialchars($row['id_marchamo']) ; ?>"></td>
                <td><?php echo htmlspecialchars($row['Marchamo']) ;?></td>
                <td><?php echo htmlspecialchars($row['Determinante'])  ?></td>
                <td><?php echo htmlspecialchars($row['Destine'])  ?></td>
                <td><?php echo htmlspecialchars($row['Door'])  ?></td>
                <td><?php echo htmlspecialchars($row['Transport Line']);  ?></td>
                <td><?php echo htmlspecialchars($row['Placas'])  ?></td>
                <td><?php echo htmlspecialchars($row['Economic Number']);  ?></td>
                <td><?php echo htmlspecialchars($row['Shipping Line'])  ?></td>
            </tr>
        <?php }
?>
            </table>
        </div>
</div>

<?php
    require 'footer.php';
?>