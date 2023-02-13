<?php
    require 'Header.php';
    require 'home.php';
    require '../assets/query/conexion.php';
    error_reporting();
    ?>
    <div class="box cajon">

     <h2 class="msj-h2">GENERACION DE SOLICITUDES </h2>
        <div class="mod-tool">
            <p class="msj-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero neque doloremque exercitationem atque id, debitis qui assumenda obcaecati aspernatur aperiam odio non quos ipsam earum veritatis. Suscipit iusto odit aperiam?</p>

                <form action="../assets/query/query-solicitud.php" method="post">
            <select name="select_destine" id="" class="seleccions" required>
                <option value="">Selecciona el tipo de destino</option>
                <option value="LOCAL">Destino Local</option>
                <option value="TRUNKING">Destino Trunking</option>
                <option value="CONSOL">Destino Consol</option>
            </select>
            
            <select name="select_tienda" id="" class="seleccions" required>
                <option value="">Selecciona la Tienda Club</option>
                <?php
                $destine = "select * from db_table_destine";
                $result = $conexion->query($destine);
                
                if(!$result)die("Fatal Error");

                $rows=$result->num_rows;

                for($j=0;$j<$rows;$j++){
                        $row=$result->fetch_array(MYSQLI_ASSOC);
                ?>

                <option value="<?php echo htmlspecialchars($row['Determinante']); ?>"> <?php echo  htmlspecialchars($row['Determinante'])." - ". htmlspecialchars($row['Tienda Club']); ?></option>

                <?php
                    }

                ?>

           

            </select>

            <select name="select_door" id="" class="seleccions" required>
                <option value="">Selecciona la Cortina a asignar</option>
                    <?php
                     $destine = "select * from db_table_doors";
                    $result = $conexion->query($destine);
                
                    if(!$result)die("Fatal Error");

                      $rows=$result->num_rows;

                    for($j=0;$j<$rows;$j++){
                            $row=$result->fetch_array(MYSQLI_ASSOC);
                    ?>

                <option value="<?php echo htmlspecialchars($row['door']); ?>"> <?php echo  htmlspecialchars($row['door'])." - ". htmlspecialchars($row['zona']); ?></option>

                <?php
                    }

                ?>
          
                
            </select>

            <!-- boton generar -->
                    <input type="submit" class="btn-generate" value="Generar Solicitud">
            <script src="../assets/js/function.js"></script>

            </form>

            <!--Tabla de Solicitudes-->
                <table>
                    <tr class="table-data-header">
                        <th>Seleccion</th>
                        <th>Determinante</th>
                        <th>Tienda Club</th>
                        <th>Cortina</th>
                        <th>Destino</th>
                    </tr>
            <!-- Implementar codigo php para tabla-->
            <form action="Formar-Unidad.php" method="GET">            
            <?php
                $sql_table = "select * from db_table_solicitud";
                $result_table = $conexion->query($sql_table);
                
                if(!$result_table)die("Fatal Error");

                $rows_table=$result_table->num_rows;

                for($j=0;$j<$rows_table;$j++){
                        $row_table=$result_table->fetch_array(MYSQLI_ASSOC);
                ?>
                <tr class="data-row">
                    <td><input type="radio" name="id_solicitud" value="<?php echo htmlspecialchars($row_table['id_solicitud']); ; ?>"></td>
                    <td><?php echo htmlspecialchars($row_table['Determinante']);   ?></td>
                    <td><?php echo htmlspecialchars($row_table['Tienda Club']); ?></td>
                    <td><?php echo htmlspecialchars($row_table['Door']);  ?></td>
                    <td><?php echo htmlspecialchars($row_table['Destine']);  ?></td>
                </tr>
                <?php
                    }
    $result->close();
    $result_table->close();
    $conexion->close();  
            ?>
                    <input type="submit" value="Formar Unidad" class="btn-generate">

            </form>
                </table>

        </div>
    </div>
</div>

<?php
    require 'footer.php';
?>