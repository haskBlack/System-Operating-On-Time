<?php
    require '../assets/query/conexion.php';
    require 'Header.php';
    require 'home.php';
    error_reporting();
?>
    <div class="box cajon">
        <h2 class="msj-h2">Etiqueta Embarcar Alto Valor HV</h2>
        <div class="mod-tool">
            <p class="msj-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime accusamus praesentium facilis est distinctio, magni, suscipit molestias eaque, eligendi quae at nemo ad molestiae perferendis soluta consequatur sequi veniam error!</p>
        </div>

        <form action="#">
            <?php
            
            $id_HV = $_GET['id-hv'];

            $sql = "select * from db_table_chv where id_HV='$id_HV'";
            $result = $conexion->query($sql);

            if(!$conexion)die("Fatal Error");

            $rows = $result->num_rows;
            $Etiqueta = $result->fetch_array(MYSQLI_ASSOC);

            ?>
            <input type="text" class="txt-form" placeholder="Etiqueta" required value="<?php echo htmlspecialchars($Etiqueta['Etiqueta']); ?>">
            <input type="text" class="txt-form" placeholder="Determinante" required value="<?php echo htmlspecialchars($Etiqueta['Determinante']); ?>">
            <input type="text" class="txt-form" placeholder="Terminacion" required value="<?php echo htmlspecialchars($Etiqueta['Terminacion']) ; ?>">
            <input type="text" class="txt-form" placeholder="Tienda Club" required value="<?php echo htmlspecialchars($Etiqueta['Tienda Club']) ; ?>">
            <input type="text" class="txt-form" placeholder="Number. Embarque" required>
            <input type="text" class="txt-form" placeholder="Transport Line" required>
            <input type="text" class="txt-form" placeholder="Economic Transport" required>
            <input type="text" class="txt-form" placeholder="Placas" required>
            <input type="text" class="txt-form" placeholder="Operador Equipos" required>
            <input type="submit" value="Guardar" class="btn-generate">
        </form>

    </div>

<?php
    require 'footer.php';
?>