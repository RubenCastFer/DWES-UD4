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
        try{
            $conn = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
            echo "Conectado correctamente";
            echo "<br>";
            $sql = "DELETE FROM turista WHERE id=1";
            $numeroClientesBorrados=$conn->exec(($sql));
            echo "Se han eliminado $numeroClientesBorrados cliente.";
        } catch(PDOException $e){
            echo"Connection fallida: " . $e->getMessage();
        }
        $conn=null;
    ?>
</body>
</html>