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

        $nombre="Iñigo"; 
        $apellido1="Montoya";
        $apellido2="Tu";
        $direccion="Mataste a mi padre"; 
        $telefono="111111111";


        $id = crearTurista($conexion, $nombre, $apellido1, $apellido2, $direccion, $telefono);
        if ($id < 1) {
            echo "Ha habido un error al crear el Turista";
            echo "<br>";
        } else {
            echo "Se ha creado con exito al turista con id $id";
            echo "<br>";
        }
       
        $turistaExtraido = extraeTurista($conexion,$id1);
        print_r($turistaExtraido);


        $resultadoExtraerTuristas = extraeTuristas($conexion);
        if($resultadoExtraerTuristas==false){
            echo "Error al mostrar los datos";
            echo "<br>";
        }else{
            echo "<table border=1px>";
            echo "<tr> ";
            echo "<td>id</td>";
            echo "<td>nombre</td>";
            echo "<td>apellido1</td>";
            echo "<td>apellido2</td>";
            echo "<td>direccion</td>";
            echo "<td>telefono</td>";
            echo "</tr> ";
         
            /*while($turista = $resultadoExtraerTuristas->fetch(PDO::FETCH_ASSOC)){

                echo "<tr> ";
                echo "<td>$turista[id]</td>";
                echo "<td>$turista[nombre]</td>";
                echo "<td>$turista[apellido1]</td>";
                echo "<td>$turista[apellido2]</td>";
                echo "<td>$turista[direccion]</td>";
                echo "<td>$turista[telefono]</td>";
                echo "</tr> ";
             
            }*/
            foreach($resultadoExtraerTuristas as $turista){
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
        }

        $direccion="Teruel"; 
        $telefono="123456789";
        $id=2;
        $resultadoActualizaTurista = actualizaTurista($conexion, $id, $direccion, $telefono);
        if ($resultadoActualizaTurista) {
            echo "El turista con id $id se ha actualizado correctamente.";
            echo "<br>";
        } else {
            echo "Error al actualizar";
            echo "<br>";
        }

        $id=6;
        $resultadoEliminarTurista= eliminaTurista($conexion,$id);
        if ($resultadoEliminarTurista) {
            echo "El turista con id $id se ha eliminado correctamente.";
            echo "<br>";
        } else {
            echo "Error al eliminar";
            echo "<br>";
        }

        $conexion=null;
    ?>
</body>
</html>