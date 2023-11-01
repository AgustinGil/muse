<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $contraseña = '';
    $bDatos = 'bdmuse';

    $conexion = mysqli_connect($servidor, $usuario, $contraseña, $bDatos) or die(mysql_error($mysqli));
?>