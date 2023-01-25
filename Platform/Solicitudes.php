<?php
    require 'Header.php';
    require 'home.php';
?>
    <div class="box cajon">

     <h2 class="msj-h2">GENERACION DE SOLICITUDES </h2>
        <div class="mod-tool">
            <p class="msj-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero neque doloremque exercitationem atque id, debitis qui assumenda obcaecati aspernatur aperiam odio non quos ipsam earum veritatis. Suscipit iusto odit aperiam?</p>

            <select name="" id="" class="seleccions">
                <option value="">Selecciona el tipo de destino</option>
                <option value="">Destino Local</option>
                <option value="">Destino Trunking</option>
                <option value="">Destino Consol</option>
            </select>
            
            <select name="" id="" class="seleccions">
                <option value="">Selecciona la Tienda Club</option>
                <option value="">6224 - SM Universidad</option>
                <option value="">6397 - SM Queretaro</option>
                <option value="">6390 - SM Polanco</option>
                <option value="">6550 - TR Villa Hermosa</option>
                <option value="">6238 - TR Guadalajara</option>
            </select>

            <select name="" id="" class="seleccions">
                <option value="">Selecciona la Cortina a asignar</option>
                <option value="">01</option>
                <option value="">02</option>
                <option value="">03</option>
                <option value="">04</option>
                <option value="">05</option>
                <option value="">06</option>
                <option value="">07</option>
                <option value="">08</option>
                <option value="">09</option>
                <option value="">10</option>
            </select>

            <!-- boton generar -->
            <div class="btn-generate" onclick="generar(1)"><span class="txt-generate">Generar solicitud</span></div>
            <script src="../assets/js/function.js"></script>

            <!--Tabla de Solicitudes-->
                <table>
                    <div>
                    <tr class="table-data-header">
                        <th>Tienda Club</th>
                        <th>Cortina</th>
                        <th>Destino</th>
                        <th>Accions</th>
                    </tr>
                    <tr class="data-row">
                        <td>6224 - SM Universidad</td>
                        <td>54</td>
                        <td>Destino Local</td>
                        <td></td>
                    </tr>
                    <tr class="data-row">
                        <td>6224 - SM Universidad</td>
                        <td>54</td>
                        <td>Destino Local</td>
                        <td></td>
                    </tr>
                    <tr class="data-row">
                        <td>6224 - SM Universidad</td>
                        <td>54</td>
                        <td>Destino Local</td>
                        <td></td>
                    </tr>
                    <tr class="data-row">
                        <td>6224 - SM Universidad</td>
                        <td>54</td>
                        <td>Destino Local</td>
                        <td></td>
                    </tr>

                </table>

        </div>
    </div>
</div>

<?php
    require 'footer.php';
?>