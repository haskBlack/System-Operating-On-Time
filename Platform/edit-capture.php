<?php
    require '../assets/query/conexion.php';
    require 'Header.php';
    require 'home.php';
    error_reporting();
?>
    <div class="box cajon">
        <h2 class="msj-h2">Actulizando datos de Embarque <i class="fa-sharp fa-solid fa-pen-fancy"></i></h2>
        <div class="mod-tool">
            <p class="msj-txt">El Contenido de este Embarque debe llevar Determinante - No. Embarque - No. Marchamo</p>
            <p class="msj-txt">Ejemplo: "6224 - 662343 - 443943"</p>
            <form action="#">

            <?php
            
            $id_capture = $_GET['id_capture'];

            $sql = "select * from db_table_capture where id_capture=".$id_capture;
            $result = $conexion ->query($sql);

            if(!$result)die("Fatal Error");

            $rows = $result->num_rows;

            for($j=0;$j<$rows;$j++){
                $row = $result ->fetch_array(MYSQLI_ASSOC);            
            ?>
            <input type="text" class="txt-form" placeholder="No. Embarque" required value="<?php echo htmlspecialchars($row['Number Embarque']) ?>">
            <input type="text" class="txt-form" placeholder="Determinante" value="<?php echo htmlspecialchars($row['Determinante']) ?>">
            <input type="text" class="txt-form" placeholder="Tienda Club" value="<?php echo htmlspecialchars($row['Tienda Club']) ?>">
            <input type="text" class="txt-form" placeholder="Cortina" value="<?php echo htmlspecialchars($row['Door']) ?>">
            <input type="text" class="txt-form" placeholder="Linea Transportista" value="<?php echo htmlspecialchars($row['Transport Line']) ?>">
            <input type="text" class="txt-form" placeholder="No Economico" value="<?php echo htmlspecialchars($row['Economic Number']) ?>">
            <input type="text" class="txt-form" placeholder="Placas" value="<?php echo htmlspecialchars($row['Placas']) ?>">
            <input type="text" class="txt-form" placeholder="Tarimas Cheps" required value="<?php echo htmlspecialchars($row['Tarimas Cheps']) ?>">
            <input type="text" class="txt-form" placeholder="Tarimas Blancas" required value="<?php echo htmlspecialchars($row['Tarimas Blancas']) ?>">
            <input type="text" class="txt-form" placeholder="Tarimas Desarmadas" required value="<?php echo htmlspecialchars($row['Tarimas Desarmadas']) ?>">
            <input type="text" class="txt-form" placeholder="Total Tarimas" required value="<?php echo htmlspecialchars($row['Total Tarimas']) ?>">
            <input type="text" class="txt-form" placeholder="Cantidad Tarimas Alto Valor" value="<?php echo htmlspecialchars($row['Tarima Alto Valor']) ?>">
            <select name="Tipo_HV" class="txt-form">
                <option value="">Tipo Alto Valor</option>
                <option value="Sin Tarima">Sin Tarima</option>
                <option value="Tarima">Tarima</option>
                <option value="Paquete">Paquete</option>
                <option value="Tarima y Paquete">Tarima y Paquete</option>
            </select>
            

            <input type="text" class="txt-form" placeholder="Terminacion Alto Valor" value="<?php echo htmlspecialchars($row['Terminacion HV']) ?>">
            <input type="file" class="txt-form" placeholder="File Contenido" required>
            <input type="text" class="txt-form" placeholder="Marchamo" required value="<?php echo htmlspecialchars($row['Marchamo']) ?>">
            <input type="text" class="txt-form" placeholder="Valor Total $0000.00" required value="<?php echo htmlspecialchars($row['Valor']) ?>">
            <input type="text" class="txt-form" placeholder="No.Factura" required value="<?php echo htmlspecialchars($row['Factura']) ?>">
            <input type="submit" class="btn-generate" value="Guardar y Cerrar">
        </form>

        </div>
    
    </div>

<?php

}

    require 'footer.php';
?>