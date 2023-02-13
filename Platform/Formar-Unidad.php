<?php
    require '../assets/query/conexion.php';
    require 'Header.php';
    require 'Home.php';
?>
    <div class="box cajon">
        <h2 class="msj-h2">Enrampe de Unidad</h2>
        <div class="mod-tool">
            <p class="msj-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, ea fuga. At deserunt dolores numquam perspiciatis enim iusto optio, vel minima explicabo totam suscipit laborum ipsa corporis exercitationem, impedit accusamus.</p>

        <form action="../assets//query/query-Formado.php" method="GET">
            <?php
                $id_solicitud = $_GET['id_solicitud'];
                $sql = "select * from db_table_solicitud where id_solicitud='$id_solicitud'";
                $result = $conexion->query($sql);

                if(!$conexion)die("Fatal Error");

                $rows = $result->num_rows;
                $solicitud = $result->fetch_array(MYSQLI_ASSOC);
            ?>
            <input type="text" class="txt-form" name="id_solicitud" value="<?php echo htmlspecialchars($solicitud['id_solicitud']); ?>">
            <input type="text" class="txt-form" required name="Determinante" placeholder="Determinante" value="<?php echo htmlspecialchars($solicitud['Determinante']) ;?>">
            <input type="text" class="txt-form" required name="Tienda-club" placeholder="Tienda Club" value="<?php echo htmlspecialchars($solicitud['Tienda Club']) ;?>">
            <input type="text" class="txt-form" required name="Cortina" placeholder="Cortina" value="<?php echo htmlspecialchars($solicitud['Door']); ?>">
            <input type="text" class="txt-form" required name="Destine" placeholder="Destino" value="<?php echo htmlspecialchars($solicitud['Destine']) ; ?>">
            <select name="linea" class="txt-form" required>
                <option value="">Linea Transportista</option>
                <option value="Tracusa">Tracusa</option>
                <option value="Culvert">Culvert</option>
                <option value="Guzman">Guzman</option>
                <option value="Consol">Consol</option>
            </select>
            <input type="text" class="txt-form" required name="Economico" placeholder="Numero Economico">
            <input type="text" class="txt-form" required name="Placas" placeholder="Placas">
            <input type="submit" class="btn-generate">
        </form>

        </div>
    </div>


<?php
    require 'footer.php';
?>