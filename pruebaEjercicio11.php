<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servidor = "localhost";
        $baseDatos = "agenciaviajes";
        $usuario = "developer";
        $pass = "developer";
        $id1=2;

        include "ejercicio11.php";

        $conexion=crearConexion($servidor,$baseDatos,$usuario,$pass);
        $turistaExtraido = extraeTurista($conexion,$id1);
        print_r($turistaExtraido);
    ?>
</body>
</html>