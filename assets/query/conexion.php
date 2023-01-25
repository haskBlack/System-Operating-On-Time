<?php

   // function conectar_to_server(){
        $server = "localhost";
        $db     = "operating";
        $user   = "root";
        $pw     = "";

        $conection = new mysqli($server,$user,$pw,$db);
        if ($conection->connect_error) die ("Fatal Error");
    //}
?>