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
    $baseDatos = "videojuegos";
    $usuario = "developer";
    $pass = "developer";
    try{
        $conn = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
        echo "Conectado correctamente";
        echo "<br>";
        $sql = "SELECT * FROM juegos";
        $juegos=$conn->query(($sql));
        echo "<table border=1px>";
        echo "<tr> ";
        echo "<td>id</td>";
        echo "<td>titulo</td>";
        echo "<td>director</td>";
        echo "<td>desarrolladora</td>";
        echo "<td>precio</td>";
        echo "<td>nota</td>";
        echo "<td>fecha lanzamiento</td>";
        echo "<td>imagen</td>";
        echo "</tr> ";
        while($juego = $juegos->fetch(PDO::FETCH_ASSOC)){
            echo "<tr> ";
            echo "<td>$juego[id]</td>";
            echo "<td>$juego[Titulo]</td>";
            echo "<td>$juego[Director]</td>";
            echo "<td>$juego[Desarrolladora]</td>";
            echo "<td>$juego[Precio]</td>";
            echo "<td>$juego[Nota]</td>";
            echo "<td>$juego[Lanzamiento]</td>";
            echo "<td>    <img src=$juego[Imagen] width=200px></td>";

            echo "</tr> ";
        }
        echo "</table>";
        echo "<br>";

    } catch(PDOException $e){
        echo"Connection fallida: " . $e->getMessage();
    }
    $conn=null;

    ?>

</body>
</html>