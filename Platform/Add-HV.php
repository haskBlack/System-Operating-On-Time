<?php
    require '../assets/query/conexion.php';
    require 'Header.php';
    require 'home.php';
    error_reporting();
?>

    <div class="box cajon">
        <h2 class="msj-h2">Agregar Registro Alto Valor ("HV")</h2>
        <div class="mod-tool">
            <p class="msj-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consectetur magnam quidem hic culpa exercitationem cumque veniam in inventore iste ipsum tempore ad id quaerat est maxime nemo, omnis vitae.</p>
            <form action="../assets/query/query-add-HV.php" method="post">
                <input type="text" class="txt-form" placeholder="Etiqueta" name="etiqueta">
                <input type="submit" value="Registrar" class="btn-generate">
            </form>

            <table>
                <tr class="table-data-header">
                    <th>Seleccions</th>
                    <th>Etiqueta</th>
                    <th>Determinante</th>
                    <th>Terminacion</th>
                    <th>Tienda Club</th>
                    <th>Number. Embarque</th>
                    <th>Transport Line</th>
                    <th>Economic Transport</th>
                    <th>Placas</th>
                    <th>Operador de Equipos</th>
                    <th>File Evidence</th>
                </tr>

                <?php
                    $sql = "select * from db_table_chv";
                    $result = $conexion->query($sql);
                    if(!$result)die("Fatal Error");

                    $rows = $result->num_rows;
                    
                    for($j=0;$j<$rows;$j++){
                        $row = $result->fetch_array(MYSQLI_ASSOC);?>
                        
                <tr>
                    <th><form action="edit-HV-Emb.php" method="GET"><input type="checkbox" name="id-hv" value="<?php echo htmlspecialchars($row['id_HV']); ?>"><input type="submit" value="Editar"></form></th>
                    <th><?php echo htmlspecialchars($row['Etiqueta']);?></th>
                    <th><?php echo htmlspecialchars($row['Determinante']);?></th>
                    <th><?php echo htmlspecialchars($row['Terminacion']);?></th>
                    <th><?php echo htmlspecialchars($row['Tienda Club']);?></th>
                    <th><?php echo htmlspecialchars($row['Number Embarque']);?></th>
                    <th><?php echo htmlspecialchars($row['Transport Line']);?></th>
                    <th><?php echo htmlspecialchars($row['Economic Transport']);?></th>
                    <th><?php echo htmlspecialchars($row['Placas']);?></th>
                    <th><?php echo htmlspecialchars($row['Operador Equipo']);?></th>
                    <th></th>
                </tr>        

                    <?php }
                ?>

            </table>
        </div>
    </div>

<?php
    require 'footer.php';
?>