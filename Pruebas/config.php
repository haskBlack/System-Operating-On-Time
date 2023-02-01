<?php

    define('DBS_HTTP_SERVER','localhost');
    define('DBS_HTTP_USER','root');
    define('DBS_HTTP_PW','');
    define('DBS_HTTP_DB','operating');

    $conexion = new mysqli(DBS_HTTP_SERVER,DBS_HTTP_USER,DBS_HTTP_PW,DBS_HTTP_DB);

    if ($conexion) {
        echo 'Conexion con la DB exitoso...';
    } else {
        echo 'Ha ocurrido un error con DB, favor de verificar la conexion...';
    }
    


?>