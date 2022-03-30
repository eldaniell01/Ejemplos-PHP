<?php
    $conexion = new PDO("sqlsrv:server=DESKTOP-BO2G09E;database=ejemplo1", "sa", "12Intercambios");
    $consulta = $conexion->prepare("SELECT * FROM usuario");
    $consulta->execute();
    $datos=$consulta->fetchAll(PDO::FETCH_ASSOC);
    var_dump($datos);
?>