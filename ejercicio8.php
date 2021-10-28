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
            $sql = "SELECT * FROM turista";
            $turistas=$conn->query(($sql));
            echo "<table border=1px>";
            echo "<tr> ";
            echo "<td>id</td>";
            echo "<td>nombre</td>";
            echo "<td>apellido1</td>";
            echo "<td>apellido2</td>";
            echo "<td>direccion</td>";
            echo "<td>telefono</td>";
            echo "</tr> ";
            while($turista = $turistas->fetch(PDO::FETCH_ASSOC)){
                echo "<tr> ";
                echo "<td>$turista[id]</td>";
                echo "<td>$turista[nombre]</td>";
                echo "<td>$turista[apellido1]</td>";
                echo "<td>$turista[apellido2]</td>";
                echo "<td>$turista[direccion]</td>";
                echo "<td>$turista[telefono]</td>";
                echo "</tr> ";
            }
            echo "</table>";
            echo "<br>";

        } catch(PDOException $e){
            echo"Connection fallida: " . $e->getMessage();
        }
        $conn=null;

        try{
            $conn = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
            echo "Conectado correctamente";
            echo "<br>";
            $sql = "SELECT * FROM turista";
            $turistas=$conn->query(($sql));
            echo "<table border=1px>";
            echo "<tr> ";
            echo "<td>id</td>";
            echo "<td>nombre</td>";
            echo "<td>apellido1</td>";
            echo "<td>apellido2</td>";
            echo "<td>direccion</td>";
            echo "<td>telefono</td>";
            echo "</tr> ";
            while($turista = $turistas->fetch(PDO::FETCH_NUM)){
                echo "<tr> ";
                echo "<td>$turista[0]</td>";
                echo "<td>$turista[1]</td>";
                echo "<td>$turista[2]</td>";
                echo "<td>$turista[3]</td>";
                echo "<td>$turista[4]</td>";
                echo "<td>$turista[5]</td>";
                echo "</tr> ";
            }
            echo "</table>";
            echo "<br>";

        } catch(PDOException $e){
            echo"Connection fallida: " . $e->getMessage();
        }
        $conn=null;


        try{
            $conn = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
            echo "Conectado correctamente";
            echo "<br>";
            $sql = "SELECT * FROM turista";
            $turistas=$conn->query(($sql));
            echo "<table border=1px>";
            echo "<tr> ";
            echo "<td>id</td>";
            echo "<td>nombre</td>";
            echo "<td>apellido1</td>";
            echo "<td>apellido2</td>";
            echo "<td>direccion</td>";
            echo "<td>telefono</td>";
            echo "</tr> ";
            while($turista = $turistas->fetch(PDO::FETCH_BOTH)){
                echo "<tr> ";
                echo "<td>$turista[id]</td>";
                echo "<td>$turista[nombre]</td>";
                echo "<td>$turista[apellido1]</td>";
                echo "<td>$turista[apellido2]</td>";
                echo "<td>$turista[direccion]</td>";
                echo "<td>$turista[telefono]</td>";
                echo "</tr> ";
            }
            echo "</table>";
            echo "<br>";

        } catch(PDOException $e){
            echo"Connection fallida: " . $e->getMessage();
        }
        $conn=null;



        try{
            $conn = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
            echo "Conectado correctamente";
            echo "<br>";
            $sql = "SELECT * FROM turista";
            $turistas=$conn->query(($sql));
            echo "<table border=1px>";
            echo "<tr> ";
            echo "<td>id</td>";
            echo "<td>nombre</td>";
            echo "<td>apellido1</td>";
            echo "<td>apellido2</td>";
            echo "<td>direccion</td>";
            echo "<td>telefono</td>";
            echo "</tr> ";
            while($turista = $turistas->fetch(PDO::FETCH_OBJ)){
                echo "<tr> ";
                echo "<td>$turista->id</td>";
                echo "<td>$turista->nombre</td>";
                echo "<td>$turista->apellido1</td>";
                echo "<td>$turista->apellido2</td>";
                echo "<td>$turista->direccion</td>";
                echo "<td>$turista->telefono</td>";
                echo "</tr> ";
            }
            echo "</table>";
            echo "<br>";

        } catch(PDOException $e){
            echo"Connection fallida: " . $e->getMessage();
        }
        $conn=null;
        try{
            $conn = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
            echo "Conectado correctamente";
            echo "<br>";
            $sql = "SELECT * FROM turista";
            $turistas=$conn->query(($sql));
            echo "<table border=1px>";
            echo "<tr> ";
            echo "<td>id</td>";
            echo "<td>nombre</td>";
            echo "<td>apellido1</td>";
            echo "<td>apellido2</td>";
            echo "<td>direccion</td>";
            echo "<td>telefono</td>";
            echo "</tr> ";
            while($turista = $turistas->fetch(PDO::FETCH_LAZY)){
                echo "<tr> ";
                echo "<td>$turista->id</td>";
                echo "<td>$turista->nombre</td>";
                echo "<td>$turista->apellido1</td>";
                echo "<td>$turista->apellido2</td>";
                echo "<td>$turista->direccion</td>";
                echo "<td>$turista->telefono</td>";
                echo "</tr> ";
            }
            echo "</table>";
            echo "<br>";

        } catch(PDOException $e){
            echo"Connection fallida: " . $e->getMessage();
        }
        $conn=null;

        try{
            $conn = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
            echo "Conectado correctamente";
            echo "<br>";
            $sql = "SELECT * FROM turista";
            $turistas=$conn->query(($sql));
            echo "<table border=1px>";
            echo "<tr> ";
            echo "<td>id</td>";
            echo "<td>nombre</td>";
            echo "<td>apellido1</td>";
            echo "<td>apellido2</td>";
            echo "<td>direccion</td>";
            echo "<td>telefono</td>";
            echo "</tr> ";
            $turistas -> bindColumn("id",$id);
            $turistas -> bindColumn("nombre",$nombre);
            $turistas -> bindColumn("apellido1",$apellido1);
            $turistas -> bindColumn("apellido2",$apellido2);
            $turistas -> bindColumn("direccion",$direccion);
            $turistas -> bindColumn("telefono",$telefono);

            
            while($turista = $turistas->fetch(PDO::FETCH_BOUND)){
               echo "<tr> ";
                echo "<td>$id</td>";
                echo "<td>$nombre</td>";
                echo "<td>$apellido1</td>";
                echo "<td>$apellido2</td>";
                echo "<td>$direccion</td>";
                echo "<td>$telefono</td>";
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