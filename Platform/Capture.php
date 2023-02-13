<?php
    require '../assets/query/conexion.php';
    require 'Header.php';
    require 'home.php';
?>

<div class="box cajon">
    <h2 class="msj-h2">CONTROL EMBARQUES EN PROCESO</h2>
        <div class="mod-tool">
            <p class="msj-txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, accusamus ipsum minima rerum perspiciatis cumque sapiente ducimus praesentium optio impedit quibusdam ut rem vitae, perferendis numquam delectus quo unde. Distinctio.</p>
        
            <table>
                <div>
                <tr class="table-data-header">
                    <th>seleccion</th>
                    <th>No. Embarque</th>
                    <th>Determinante</th>
                    <th>Tienda Club</th>
                    <th>Destine</th>
                    <th>Door</th>
                    <th>No. Economico</th>
                    <th>Transport Line</th>
                    <th>Placas Unidad</th>
                    <th>Tarimas Cheps</th>
                    <th>Tarimas Blancas</th>
                    <th>Tarimas Desarmadas</th>
                    <th>Tipo Alto Valor</th>
                    <th>Tarimas Alto valor</th>
                    <th>Terminacion A.V</th>
                    <th>Total Tarimas</th>
                    <th>Marchamo</th>
                    <th>File Contenido</th>
                    <th>Turno</th>
                    <th>Status</th>
                </tr>
                <form action="edit-capture.php" method="GET">
                
                <?php
                $sql = "select * from db_table_capture";
                $result = $conexion->query($sql);

                if(!$result)die("Fatal Error");

                $rows= $result->num_rows;

                for($j=0;$j<$rows;$j++){

                    $row=$result->fetch_array(MYSQLI_ASSOC);?>
                
                    <tr class="data-row">
                        <td><input type="radio" name="id_capture" value="<?php echo htmlspecialchars($row['id_capture']); ?>"/></td>
                        <td><?php echo htmlspecialchars($row['Number Embarque']); ?></td>
                        <td><?php echo htmlspecialchars($row['Determinante']); ?></td>
                        <td><?php echo htmlspecialchars($row['Tienda Club']); ?></td>
                        <td><?php echo htmlspecialchars($row['Destine']); ?></td>
                        <td><?php echo htmlspecialchars($row['Door']); ?></td>
                        <td><?php echo htmlspecialchars($row['Economic Number']); ?></td>
                        <td><?php echo htmlspecialchars($row['Transport Line']); ?></td>
                        <td><?php echo htmlspecialchars($row['Placas']); ?></td>
                        <td><?php echo htmlspecialchars($row['Tarimas Cheps']); ?></td>
                        <td><?php echo htmlspecialchars($row['Tarimas Blancas']); ?></td>
                        <td><?php echo htmlspecialchars($row['Tarimas Desarmadas']); ?></td>
                        <td><?php echo htmlspecialchars($row['Total Tarimas']); ?></td>
                        <td><?php echo htmlspecialchars($row['Tarima Alto Valor']); ?></td>
                        <td><?php echo htmlspecialchars($row['Tipo HV']); ?></td>
                        <td><?php echo htmlspecialchars($row['Terminacion HV']); ?></td>
                        <td><?php echo htmlspecialchars($row['Marchamo']) ?></td>
                        <td><?php echo htmlspecialchars($row['File Content']); ?></td>
                        <td><?php echo htmlspecialchars($row['Turno']); ?></td>
                        <td><?php echo htmlspecialchars($row['Status']); ?></td>
                    </tr>

               <?php }
                
                ?>
                <input type="submit" value="Editar" class="btn-generate">
</form>
            </table>

        </div>
</div>


<?php
    require 'Footer.php';
?>